<?php

namespace AdminKit\Vacancy\UI\Filament\Resources\VacancyResource\RelationManagers;

use AdminKit\Core\Forms\Components\TranslatableTabs;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class VacancyGalleryRelationManager extends RelationManager
{
    protected static string $relationship = 'gallery';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\SpatieMediaLibraryFileUpload::make('background')
                    ->label(__('admin-kit-vacancy::vacancy.resource.image'))
                    ->collection('gallery')
                    ->image()
                    ->columnSpan(2)
                    ->required(),
                TranslatableTabs::make(fn ($locale) => Tab::make($locale)->schema([
                    Forms\Components\TextInput::make('title.'.$locale)
                        ->label(__('admin-kit-vacancy::vacancy.resource.title'))
                        ->required(),
                ]))->columnSpan(2),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('background')
                    ->collection('gallery')
                    ->label(__('admin-kit-vacancy::vacancy.resource.image')),
                Tables\Columns\TextColumn::make('title')
                    ->label(__('admin-kit-vacancy::vacancy.resource.title')),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
