<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExcellController extends Controller
{
    protected $export_errors = [
        'price' => [
            'Неца указана в неверном формате',
            'Цена сликом большая',
            'Нам нужна другая цена'
        ],
        'category' => [
            'Указанная категория не найдена'
        ],
        'option' => [
            'Опция не найдена'
        ],
        'group' => [
            'Группа опций с таким именем не найдена'
        ],
        'id' => [
            'Товар с таким id не найден'
        ]
    ];
    private $export_labels = [
        'name' => 'Название',
        'price' => 'Цена',
        'article' => 'Артикул',
        'category' => 'Категория',
        'description' => 'Описание',
        'active' => 'Активный',
        'top' => 'Топ',
        'new' => 'Новый',
        'brand' => 'Бренд',
        'season' => 'Сезон',
        'style' => 'Стиль',
        'gender' => 'Пол',
        'options' => 'Опции',
    ];


    public function import(Request $request)
    {
//        $contents = File::get($filename);
//        $file = $request->file('product_import');
//        dd(Input::file('product_import'));
        $import_products = Excel::load($request->file('product_import'), function ($reader) {
        })->get()->toArray()[0];
//        dd($import_products);
        //tmp for fix null value error
        $import_products = array_filter($import_products, function ($product) {
            $is_empty_array = true;
            foreach ($product as $value) {
                if ($value !== null && strlen(trim($value))) {
                    $is_empty_array = false;
                }
            }
            return !$is_empty_array;
        });
        dump($import_products);

        $categories = Category::all()->pluck('id', 'name');

        $import_order = array_flip($this->export_labels);

        foreach ($import_products as $product) {


            foreach ($product as $key => $value) {

                if (isset($import_order[$key])) {


                    $prepared_product[$import_order[$key]] = strpos($import_order[$key], 'id') !== false ? (int)$value : $value;

                    //Check category
                    if ($import_order[$key] === 'category') {
                        if (isset($categories[$value])) {
                            $prepared_product['category_id'] = $categories[$value];
                        } else {
                            $prepared_product['errors'][$product['ID']] = $this->export_errors['category'][0];
                        }
                    }
                }
                if(isset($prepared_product['name'])){
                    $prepared_product['slug'] = str_slug($prepared_product['name'], "-");
                }

            }
            $products[] = $prepared_product;
        }

//        dd($products);
        foreach ($products as $product_data){
            $product = new Product();
            $product->fill($product_data);
            $product->save();
        }
    }

}