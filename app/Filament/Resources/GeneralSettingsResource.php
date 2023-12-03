<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeneralSettingsResource\Pages;
use App\Filament\Resources\GeneralSettingsResource\RelationManagers;
use App\Models\GeneralSettings;

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

class GeneralSettingsResource extends Resource
{
    protected static ?string $model = GeneralSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationGroup = 'Website Settings';
    protected static ?int $navigationSort = 6;

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
                            Section::make('Add General Settings')
                                ->description('Make general settings in website')
                                ->schema([
                                    TextInput::make('main_email')
                                        ->nullable()
                                        ->placeholder('Enter Main Email'),
                                    TextInput::make('number')
                                        ->nullable()
                                        ->placeholder('Enter Main Number'),
                                    Toggle::make('maintain_mode'),
                                    Toggle::make('comming_soon'),
                                    TextInput::make('facebook_link')
                                        ->nullable()
                                        ->placeholder('Enter Facebook link'),
                                    TextInput::make('instagram_link')
                                        ->nullable()
                                        ->placeholder('Enter Instagram link'),
                                    TextInput::make('youtube_link')
                                        ->nullable()
                                        ->placeholder('Enter Youtube Link'),
                                ]),

                        ]),
                    ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('main_email'),
                TextColumn::make('number'),
                ToggleColumn::make('maintain_mode'),
                ToggleColumn::make('comming_soon'),
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
            'index' => Pages\ListGeneralSettings::route('/'),
            'create' => Pages\CreateGeneralSettings::route('/create'),
            'edit' => Pages\EditGeneralSettings::route('/{record}/edit'),
        ];
    }    
}
