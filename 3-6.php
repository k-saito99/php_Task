/*第４部-コントローラとルーティングでAdmin/ProfileControllerのadd Action, edit Action に次のように記述しました。*/

  public function add()
  {
      return view('admin.profile.create');
  }
  public function edit()
  {
      return view('admin.profile.edit');
  }
/*この場合、add Action と edit Action を描画するには、それぞれどこのディレクトリに何というbladeファイルを設置すれば良いでしょうか。*/
resources/views/admin/profileにcreate.blade.phpファイル
resources/views/admin/profileにedid.blade.phpファイルを設置
