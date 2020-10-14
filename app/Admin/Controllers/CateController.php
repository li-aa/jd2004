<?php

namespace App\Admin\Controllers;

use App\Cate;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CateController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Cate';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cate());
        $grid->column('c_id', __('Id'));
        $grid->column('name', __('名称'));
        $grid->addtime('创建时间');


        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new detail(Cate::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('addtime', __('Addtime'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Cate());
        $form->text('name');
        // $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));


        return $form;
    }
}


