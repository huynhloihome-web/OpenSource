<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sach;
use App\Models\TheLoai;

class SachController extends Controller
{
    // Hiển thị tất cả sách
    public function index()
    {
        $saches = Sach::with('theLoai')->orderBy('id')->paginate(12);
        $title = 'Danh sách sách';
        return view('index', compact('saches', 'title'));
    }
    
    // Hiển thị sách theo thể loại
    public function theoTheLoai($id)
    {
        $theLoai = TheLoai::findOrFail($id);
        $saches = Sach::where('the_loai', $id)
                      ->with('theLoai')
                      ->orderBy('id')
                      ->paginate(12);
        $title = 'Thể loại: ' . $theLoai->ten_the_loai;
        return view('index', compact('saches', 'title'));
    }
}