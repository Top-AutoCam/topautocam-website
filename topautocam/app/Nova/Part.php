<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;

class Part extends Resource
{
    public static $group = "Inventory";

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Part::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'price', 'code', 'make', 'model', 'color', 'status',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('name')->sortable(),
            Image::make('image')->disableDownload()->rules('required'),
            Text::make('code')->readonly()->hideFromIndex()->hideWhenCreating(),
            Currency::make('price')->currency('USD')->sortable()->rules('required'),
            Select::make('make')->options(config('enums.MAKE'))->sortable()->rules('required'),
            Select::make('model')->options(config('enums.MODEL'))->sortable()->rules('required'),
            Select::make('color')->options(config('enums.COLOR'))->rules('required'),
            BelongsTo::make('Order')->hideFromIndex(),
            Badge::make('status')->map([
                config('enums.INVENTORY_STATUS.IN_STOCK') => 'success',
                config('enums.INVENTORY_STATUS.SOLD') => 'danger',
            ])->sortable()->rules('required'),
            Badge::make('selected')->map([
                config('enums.SELECTED.NORMAL') => 'info',
                config('enums.SELECTED.FEATURED') => 'success',
            ])->sortable()->rules('required'),
            HasMany::make('Gallery', 'images', PartImage::class)
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            (new Actions\Selling)
                ->confirmText('Are you sure you want to sell this part?')
                ->confirmButtonText('Sell')
                ->cancelButtonText("Cancel"),
            (new Actions\Returning)
                ->confirmText('Are you sure you want to unsold this part?')
                ->confirmButtonText('Return')
                ->cancelButtonText("Cancel")
        ];
    }

    /**
     * Default ordering for index query.
     *
     * @var array
     */
    public static $sort = [
        'updated_at' => 'desc'
    ];

    /**
     * Build an "index" query for the given resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function indexQuery(NovaRequest $request, $query)
    {
        if (empty($request->get('orderBy'))) {
            $query->getQuery()->orders = [];

            return $query->orderBy(key(static::$sort), reset(static::$sort));
        }
        return $query;
    }
}
