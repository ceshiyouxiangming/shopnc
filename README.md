# shopnc

这是一个b2b2c的商城。

笔记:
  ■ 商城入驻的功能被隐藏掉了。
    强制进入入驻的方法
    http://jc777.deci.jp/shopnc/shop/index.php?act=store_joinin&op=register

  ■ 在shop/control里的php都不能直接访问的。要以下形式访问
    ~/shop/index.php?act={php的文件名}&op={执行命令}
    例子：http://jc777.deci.jp/shopnc/shop/index.php?act=store_joinin&op=register
