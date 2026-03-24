@extends('components.book-layout')

@section('content')
<div class="list-book">
    @forelse($saches as $sach)
    <div class="book">
        <div class="card h-100">
            <img src="{{ $sach->link_anh_bia }}" class="card-img-top" alt="{{ $sach->tieu_de }}" style="height: 250px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 16px; height: 48px; overflow: hidden;">{{ $sach->tieu_de }}</h5>
                <p class="card-text mb-1">
                    <strong>Tác giả:</strong> {{ $sach->tac_gia ?? 'Không rõ' }}<br>
                    <strong>Giá:</strong> <span style="color: red; font-weight: bold;">{{ number_format($sach->gia_ban) }} đ</span>
                </p>
                <a href="#" class="btn btn-danger btn-sm mt-2">Xem chi tiết</a>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12 text-center">
        <p>Không có sách nào trong thể loại này.</p>
    </div>
    @endforelse
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $saches->links() }}
</div>
@endsection