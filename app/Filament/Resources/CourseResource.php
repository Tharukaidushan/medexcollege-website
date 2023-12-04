<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Category;
use App\Models\Course;
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
use Filament\Forms\Components\Fieldset;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;

use Filament\Tables\Actions\BulkAction;
use Illuminate\Database\Eloquent\Collection;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\ImageColumn;

use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;

use Illuminate\Support\Str;
use Closure;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Course Information';
    protected static ?int $navigationSort = 2;

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
                            Section::make('Add course')
                                ->description('Make a new course')
                                ->schema([
                                    Select::make('category_id')
                                        ->required()
                                        ->options(Category::pluck('name', 'id'))
                                        ->searchable()
                                        ->label('Select Category'),

                                    Select::make('teacher_id')
                                        ->required()
                                        ->options(Teacher::pluck('first_name', 'id'))
                                        ->searchable()
                                        ->label('Select Teacher'),

                                    TextInput::make('course_code')
                                        ->nullable()
                                        ->placeholder('Cource Code'),

                                    TextInput::make('title')
                                        ->required()
                                        ->label('Course title')
                                        ->placeholder('Cource title')
                                        ->reactive()
                                        ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                            if (!$get('is_slug_changed_manually') && filled($state)) {
                                                $slug = Str::slug($state);
                                                $existingSlugs = Course::where('slug', 'LIKE', $slug . '%')->pluck('slug')->toArray();

                                                $suffix = 1;
                                                while (in_array($slug, $existingSlugs)) {
                                                    $slug = Str::slug($state) . '-' . $suffix;
                                                    $suffix++;
                                                }

                                                $set('slug', $slug);
                                            }
                                        }),

                                    Textarea::make('small_description')
                                        ->nullable()
                                        ->placeholder('Small course description')
                                        ->label('Small course description'),

                                    RichEditor::make('long_description')
                                        ->nullable()
                                        ->placeholder('Long course description')
                                        ->label('Long course description'),  

                                    RichEditor::make('duration')
                                        ->nullable()
                                        ->placeholder('Enter course duration')
                                        ->label('Course duration'),

                                    RichEditor::make('qualifications')
                                        ->nullable()
                                        ->placeholder('Enter course qualifications')
                                        ->label('Course qualifications'),
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
                                    Select::make('mode')
                                    ->options([
                                        'draft' => 'Draft',
                                        'ongoing' => 'Ongoing',
                                        'upcomming' => 'Upcomming'
                                    ])
                                    ->searchable()
                                    ->required()
                                    ->label('Select Mode'),

                                    Fieldset::make('Price section')
                                        ->schema([
                                            TextInput::make('price')
                                            ->default(0.00)
                                            ->placeholder('Course total price')
                                            ->nullable(),

                                            TextInput::make('discount')
                                            ->suffix('%')
                                            ->default(0.00)
                                            ->placeholder('Discount presentage')
                                            ->nullable(),
                                    ])
                                        ->columns(2),

                                    FileUpload::make('breadcrum_image')
                                        ->nullable()
                                        ->directory('course/course-breadcrumb-images')
                                        ->preserveFilenames()
                                        ->maxSize(3024),

                                    FileUpload::make('main_image')
                                        ->nullable()
                                        ->directory('course/course-main-images')
                                        ->preserveFilenames()
                                        ->maxSize(2024),

                                    FileUpload::make('resouces')
                                        ->nullable()
                                        ->directory('course/course-resources')
                                        ->preserveFilenames()
                                        ->maxSize(2024),
                                        
                                    Fieldset::make('Course health')
                                        ->schema([
                                            TextInput::make('course_duration')
                                            ->rules(['integer'])
                                            ->numeric()
                                            ->placeholder('Course duration')
                                            ->nullable(),

                                            TextInput::make('lectures')
                                            ->rules(['integer'])
                                            ->numeric()
                                            ->placeholder('How many lectures')
                                            ->nullable(),

                                            TextInput::make('student_count')
                                            ->rules(['integer'])
                                            ->numeric()
                                            ->placeholder('Student count')
                                            ->nullable(),
                                        ])
                                        ->columns(3),

                                    Repeater::make('languages')
                                        ->schema([
                                            TextInput::make('name')->nullable(),
                                        ]),

                                    TextInput::make('slug')
                                        ->nullable()
                                        ->placeholder('Course slug auto generate')
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
                    Grid::make()
                        ->columnSpan([
                            'default' => 1,
                            'md' => 1,
                            'lg' => 1,
                        ])
                        ->schema([
                            Section::make('Social setting')
                                ->description('Make advance setting')
                                ->schema([
                                    TextInput::make('email')
                                        ->nullable()
                                        ->placeholder('Enter course email'),

                                    TextInput::make('contact_number')
                                        ->nullable()
                                        ->placeholder('Enter contact number'),

                                    TextInput::make('embed_video')
                                        ->nullable()
                                        ->placeholder('Enter course video link from youtube'),
                                ]),

                        ]),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('teacher.image')->circular(),
                TextColumn::make('course_code')->searchable()->copyable(),
                TextColumn::make('title')->searchable(),
                TextColumn::make('category.name'),
                TextColumn::make('mode'),
                TextColumn::make('price')->prefix('LKR '),
                ToggleColumn::make('status'),
            ])
            ->filters([
                Filter::make('status')
                ->toggle(),
                SelectFilter::make('mode')
                ->searchable()
                ->options([
                    'draft' => 'Draft',
                    'ongoing' => 'Ongoing',
                    'upcomming' => 'Upcomming',
                ])
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }    
}
