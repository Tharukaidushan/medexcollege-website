<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;

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
use Filament\Forms\Components\Toggle;

use Filament\Tables\Actions\BulkAction;
use Illuminate\Database\Eloquent\Collection;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';
    protected static ?string $navigationGroup = 'Course Information';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Grid::make()
                ->columns(2)
                ->schema([
                    Grid::make()
                        ->columnSpan([
                            'default' => 1,
                            'md' => 1,
                            'lg' => 1,
                        ])
                        ->schema([
                            Section::make('Add course category')
                                ->description('Make a new course category')
                                ->schema([
                                    TextInput::make('name')
                                        ->rules(['max:255', 'string'])
                                        ->required()
                                        ->placeholder('Category name')
                                        ->reactive()
                                        ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                            if (!$get('is_slug_changed_manually') && filled($state)) {
                                                $slug = Str::slug($state);
                                                $existingSlugs = Category::where('slug', 'LIKE', $slug . '%')->pluck('slug')->toArray();

                                                $suffix = 1;
                                                while (in_array($slug, $existingSlugs)) {
                                                    $slug = Str::slug($state) . '-' . $suffix;
                                                    $suffix++;
                                                }

                                                $set('slug', $slug);
                                            }
                                        }),
                                    
                                    FileUpload::make('image')
                                        ->nullable()
                                        ->directory('course-category')
                                        ->preserveFilenames()
                                        ->maxSize(2024),
                                ]),

                        ]),
                    Grid::make()
                        ->columnSpan([
                            'default' => 1,
                            'md' => 1,
                            'lg' => 1,
                        ])
                        ->schema([
                            Section::make('Advance setting')
                                ->description('Make advance setting')
                                ->schema([
                                    TextInput::make('slug')
                                        ->rules(['max:255', 'string'])
                                        ->nullable()
                                        ->placeholder('Category slug auto generate')
                                        ->afterStateUpdated(function (Closure $set) {
                                            $set('is_slug_changed_manually', true);
                                        }),
                                    TextInput::make('order_by')
                                        ->rules(['integer'])
                                        ->nullable()
                                        ->placeholder('Order by'),
                                    Toggle::make('status'),
                                ]),

                        ]),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('slug'),
                ToggleColumn::make('status')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }    
}
