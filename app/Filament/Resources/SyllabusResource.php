<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SyllabusResource\Pages;
use App\Filament\Resources\SyllabusResource\RelationManagers;
use App\Models\Course;
use App\Models\Syllabus;

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
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;

use Filament\Tables\Actions\BulkAction;
use Illuminate\Database\Eloquent\Collection;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

use Illuminate\Support\Str;

class SyllabusResource extends Resource
{
    protected static ?string $model = Syllabus::class;

    protected static ?string $recordTitleAttribute = 'Course Topics';

    protected static ?string $navigationIcon = 'heroicon-o-check-circle';
    protected static ?string $navigationGroup = 'Course Information';
    protected static ?int $navigationSort = 3;

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
                            Section::make('Add course syllabus')
                                ->description('Make a new syllabus topic')
                                ->schema([
                                    Select::make('course_id')
                                        ->options(Course::pluck('title', 'id'))
                                        ->searchable()
                                        ->label('Select Course'),

                                    Repeater::make('topics')
                                        ->schema([
                                            TextInput::make('topic_code')
                                                ->nullable()
                                                ->placeholder('Enter topic code'),
                                            TextInput::make('topics')
                                                ->required()
                                                ->placeholder('Enter topic'),
                                            Repeater::make('sub_topics')
                                            ->label('Sub topics')
                                                ->schema([
                                                    TextInput::make('sub_topic_name')
                                                    ->nullable()
                                                    ->placeholder('Enter sub topic name'),
                                                    TextInput::make('duration')
                                                        ->nullable()
                                                        ->placeholder('Enter duration'),
                                                ])
                                                ->columns(2),
                                        ])
                                        ->columns(2),
                                        
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
                TextColumn::make('course.title'),
                ToggleColumn::make('status'),
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
            'index' => Pages\ListSyllabi::route('/'),
            'create' => Pages\CreateSyllabus::route('/create'),
            'edit' => Pages\EditSyllabus::route('/{record}/edit'),
        ];
    }    
}
