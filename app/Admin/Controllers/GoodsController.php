<?php

namespace App\Admin\Controllers;

use App\Goods;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GoodsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Goods';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Goods());

        $grid->column('goods_id', __('Goods id'));
        $grid->column('goods_name', __('Goods name'));
        $grid->column('goods_price', __('Goods price'));
        // $grid->column('goods_num', __('Goods num'));
        // $grid->file('goods_img', __('Goods img'));
        // $grid->column('goods_imgs', __('Goods imgs'));
        // $grid->column('goods_desc', __('Goods desc'));
        $grid->column('goods_score', __('Goods score'));
        $grid->column('is_nwe', __('Is nwe'));
        $grid->column('is_hot', __('Is hot'));
        $grid->column('is_slide', __('Is slide'));
        $grid->column('is_show', __('Is show'));
        $grid->column('blog_id', __('Blog id'));
        $grid->column('cate_id', __('Cate id'));

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
        $show = new Show(Goods::findOrFail($id));

        $show->field('goods_id', __('Goods id'));
        $show->field('goods_name', __('Goods name'));
        $show->field('goods_price', __('Goods price'));
        $show->field('goods_num', __('Goods num'));
        $show->field('goods_img', __('Goods img'));
        $show->field('goods_imgs', __('Goods imgs'));
        $show->field('goods_desc', __('Goods desc'));
        $show->field('goods_score', __('Goods score'));
        $show->field('is_nwe', __('Is nwe'));
        $show->field('is_hot', __('Is hot'));
        $show->field('is_slide', __('Is slide'));
        $show->field('is_show', __('Is show'));
        $show->field('blog_id', __('Blog id'));
        $show->field('cate_id', __('Cate id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Goods());

        $form->number('goods_id', __('Goods id'));
        $form->text('goods_name', __('Goods name'));
        $form->text('goods_price', __('Goods price'));
        $form->text('goods_num', __('Goods num'));
        $form->text('goods_img', __('Goods img'));
        $form->text('goods_imgs', __('Goods imgs'));
        $form->text('goods_desc', __('Goods desc'));
        $form->text('goods_score', __('Goods score'));
        $form->text('is_nwe', __('Is nwe'))->default('1');
        $form->text('is_hot', __('Is hot'))->default('1');
        $form->text('is_slide', __('Is slide'))->default('1');
        $form->text('is_show', __('Is show'))->default('1');
        $form->number('blog_id', __('Blog id'));
        $form->number('cate_id', __('Cate id'));

        return $form;
    }
}
