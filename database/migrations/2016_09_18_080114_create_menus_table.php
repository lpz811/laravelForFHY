<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('parent_id')->default(0)->comment('父级菜单ID');
            $table->smallInteger('data_id')->default(0)->comment('下级分类ID');
            $table->smallInteger('data_pid')->default(0)->comment('DATA_PID');
            $table->string('icon', 50)->comment('菜单图标');
            $table->string('icon_close', 50)->comment('菜单关闭时图标');
            $table->string('name', 50)->comment('菜单名称');
            $table->string('route', 50)->comment('菜单路由');
            $table->string('description', 50)->comment('菜单描述');
            $table->string('tab_id', 50)->comment('打开的Navtab的ID');
            $table->boolean('data_fresh')->comment('点击Navtab时是否重载');
            //$table->boolean('expand_all')->comment('菜单是否展开');
            $table->tinyInteger('sort')->default(0)->comment('菜单排序');
            $table->tinyInteger('hide')->default(0)->comment('是否隐藏');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menus');
    }
}
