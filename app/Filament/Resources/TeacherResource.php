<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherResource\Pages;
use App\Filament\Resources\TeacherResource\RelationManagers;
use App\Models\Teacher;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

use Filament\Tables\Columns\TextColumn;

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Grid::make()
                ->columns(2)
                ->schema([
                    Grid::make()
                        ->columnSpan([
                            'default' => 3,
                            'md' => 3,
                            'lg' => 3,
                        ])
                        ->schema([
                            Section::make('Add Teacher')
                                ->description('Add a new teacher')
                                ->schema([
                                    TextInput::make('surname')
                                        ->required()
                                        ->placeholder('Enter Mr. Mrs.'),

                                    TextInput::make('first_name')
                                        ->required()
                                        ->placeholder('Enter first name')
                                        ->reactive()
                                        ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                            if (!$get('is_slug_changed_manually') && filled($state)) {
                                                $slug = Str::slug($state);
                                                $existingSlugs = Teacher::where('slug', 'LIKE', $slug . '%')->pluck('slug')->toArray();

                                                $suffix = 1;
                                                while (in_array($slug, $existingSlugs)) {
                                                    $slug = Str::slug($state) . '-' . $suffix;
                                                    $suffix++;
                                                }

                                                $set('slug', $slug);
                                            }
                                        }),

                                    TextInput::make('last_name')
                                        ->nullable()
                                        ->placeholder('Enter last name'),

                                    TextInput::make('email')
                                        ->nullable()
                                        ->placeholder('Enter email'),

                                    TextInput::make('number')
                                        ->nullable()
                                        ->placeholder('Enter number'),

                                    FileUpload::make('image')
                                        ->nullable()
                                        ->label('Upload teacher photo'),

                                    TextInput::make('order_by')
                                        ->rules(['integer'])
                                        ->nullable()
                                        ->placeholder('Order by'),

                                    TextInput::make('qualification')
                                        ->nullable()
                                        ->placeholder('Enter number'),

                                    TextInput::make('slug')
                                        ->nullable()
                                        ->placeholder('Slug add auto')
                                        ->afterStateUpdated(function (Closure $set) {
                                            $set('is_slug_changed_manually', true);
                                        }),
                                ]),

                        ]),
                    ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name'),
                TextColumn::make('last_name'),
                TextColumn::make('email'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeacher::route('/create'),
            'edit' => Pages\EditTeacher::route('/{record}/edit'),
        ];
    }    
}
