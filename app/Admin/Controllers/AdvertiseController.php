<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Advertise;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class AdvertiseController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Advertise(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('country_code');
            $grid->column('icon')->image('', '50', '50');
            $grid->column('title');
            $grid->column('device');
            $grid->column('sort');
            $grid->column('status')->using([0 => '下架', 1 => '上架']);
            $grid->column('start_at');
            $grid->column('end_at');
            $grid->column('type');
            $grid->column('location');
            $grid->column('location_image')->image('', '50', '50');
            $grid->column('click_count');
            $grid->column('remark');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Advertise(), function (Show $show) {
            $show->field('id');
            $show->field('country_code');
            $show->field('package_name');
            $show->field('icon');
            $show->field('title');
            $show->field('description');
            $show->field('url');
            $show->field('device');
            $show->field('sort');
            $show->field('status');
            $show->field('start_at');
            $show->field('end_at');
            $show->field('type');
            $show->field('location');
            $show->field('location_image');
            $show->field('click_count');
            $show->field('remark');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Advertise(), function (Form $form) {
            $form->display('id');
            $form->image('icon');
            $form->text('title');
            $form->text('description');
            $form->text('url');
            //$form->text('device');
            $form->text('sort');
            $form->switch('status');
            $form->datetimeRange('start_at', 'end_at', '开始和结束时间范围');
            //$form->text('start_at');
            //$form->text('end_at');
            $form->text('type');
            $form->text('location');
            $form->image('location_image');
            $form->display('click_count');
            $form->text('remark');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
