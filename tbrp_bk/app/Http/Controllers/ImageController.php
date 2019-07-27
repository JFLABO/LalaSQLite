<?php

namespace App\Http\Controllers;

use App\User;
use App\Image_two;
use Illuminate\Http\Request;

class ImageController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(auth()->id());

        return view('home', compact('user'));
    }

    public function create()
    {
        $this->middleware('auth');
        return view('images.create');
    }
    public function index2()
    {
        // 1. 新しい順に取得できない
        // $posts = Post::all();

        // 2. 記述が長くなる
        // $posts = Post::orderByDesc('created_at')->get();

        // 3. latestメソッドがおすすめ
        //$posts = Post::latest()->get();
        //$images = Image_two::orderByDesc('id')->get();
        //return view('images', ['images' => $images]);
        $images = Image_two::orderByAsc('created_at')->get();
        $images = Image_two::paginate(8);
    }
    public function destroy(Image_two $Image)
    {
        $Image->delete();
        return redirect('show_img_card');
    }
    public function show(Image_two $Image)
    {
        // 1. 新しい順に取得できない
        // $posts = Post::all();

        // 2. 記述が長くなる
        // $posts = Post::orderByDesc('created_at')->get();

        // 3. latestメソッドがおすすめ
        //$posts = Post::latest()->get();
        //$images = Image_two::orderByDesc('id')->get();
        $images = Image_two::where('id', $Image->id)->first();
        return view('images.show', ['images' => $images]);
        //return view('images.cards', ['images' => $images]);
    }
    public function edit(Image_two $Image)
    {
        $this->middleware('auth');
        //$post = Post::orderByDesc('id')->get();
        //$post = Post::where('id',"1")->first();
        //$post=Post::table('daily')->where('id', '1')->first();
        return view('images.edit', ['Image' => $Image]);
    }
    public function show_list()
    {
        // 1. 新しい順に取得できない
        // $posts = Post::all();

        // 2. 記述が長くなる
        // $posts = Post::orderByDesc('created_at')->get();

        // 3. latestメソッドがおすすめ
        //$posts = Post::latest()->get();
        //$images = Image_two::orderByAsc('id')->get();
        $images = Image_two::orderByAsc('created_at')->get();

        $images = Image_two::paginate(8);
        return view('images.cards', ['images' => $images]);
    }
    /**
     * ファイルアップロード処理
     */
    /*
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
                // 最小縦横120px 最大縦横400px
                'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            //$filename = $request->file->store('public/images');
            $filename = $request->file->store('public/avatar');
            $user = User::find(auth()->id());
            $user->avatar_filename = basename($filename);
            $user->save();
            return redirect('/home')->with('success', '保存しました。');
            //return redirect('./')->with('success', '保存しました。');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
    */
    public function store(Request $request)
    {
        $image = new Image_two;
        //$post->title = "'".$request->title."'";
        //$post->body = "'".$request->body."'";
        $image->title = $request->title;
        $image->body = $request->body;
        $image->save();
        return redirect('images/'.$post->id);
    }
    public function update(Request $request,Image_two $Image)
    {
        $images = Image_two::where('id', $Image->id)->first();
        //$image = new Image_two;
        //$post->title = "'".$request->title."'";
        //$post->body = "'".$request->body."'";
        $images->title = $request->title;
        $images->body = $request->body;
        $images->save();
        return redirect('images/'.$Image->id);
    }

    /**
     * ファイルアップロード処理
     */
    public function upload_img(Request $request)
    {
        $allowedfileExtension=['pdf','jpg','png','docx'];
        $files = $request->file('photos');

        $this->validate($request, [
            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                //'image',
                // MIMEタイプを指定
                'mimes:jpeg,png,jpg',
                'image' => 'max:50480',
                // 最小縦横120px 最大縦横400px
                //'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            //$filename = $request->file->store('public/images');
            $filename = $request->file->getClientOriginalName();
            /*
            $Image = Image::table('images')->insertGetId(
                ['title' => 'john@example.com', 'body' => "b",'img'=>$request->file('file')]
            );
            */
            $pathToFile=$request->file('file');
            //$fh=fopen($pathToFile,'rb');
            $Image = new Image_two;
            $Image['title'] = $request->title;
            $Image['body'] = $request->body;
            $Image['filename']=$filename;
            $Image['img'] = base64_encode(file_get_contents($pathToFile));
            //$Image->avatar_filename = basename($filename);
            $Image->save();

            return redirect('./images/create')->with('success', '保存しました。');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
    /**
     * ファイルアップロード処理
     */
    public function upload(Request $request)
    {
        $allowedfileExtension=['pdf','jpg','png','docx'];

        $files = $request->file('photos');
        $this->validate($request, [
            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
                // 最小縦横120px 最大縦横400px
                //'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            //$filename = $request->file->store('public/images');
            $filename = $request->file->store('public/avatar');
            $user = User::find(auth()->id());
            $user->avatar_filename = basename($filename);
            $user->save();

            return redirect('/home')->with('success', '保存しました。');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
}
