<x-book-layout>
    <x-slot name='title'>
        Chi tiết sách
    </x-slot>

<div class="container-fluid mt-3">
    <h4 class="text-primary mb-3">{{ $sach->tieu_de }}</h4>

    <div class="row">
        <div class="col-md-4 text-center">
            <img src="{{ asset('book_image/'.$sach->file_anh_bia) }}" 
                 alt="{{ $sach->tieu_de }}" 
                 class="img-fluid shadow-sm" 
                 style="max-height: 400px;">
        </div>
        
        <div class="col-md-8">
            <div class="info-details">
                <p>Nhà cung cấp: <strong>{{ $sach->nha_cung_cap }}</strong></p>
                <p>Nhà xuất bản: <strong>{{ $sach->nha_xuat_ban }}</strong></p>
                <p>Tác giả: <strong>{{ $sach->tac_gia }}</strong></p>
                <p>Hình thức bìa: <strong>{{ $sach->hinh_thuc_bia }}</strong></p>
                <p>Giá bán: <strong class="text-danger">{{ number_format($sach->gia_ban, 0, ',', '.') }}đ</strong></p>
            </div>
        </div>
    </div>

    <hr>

    <div class="row mt-4">
        <div class="col-12">
            <h5 class="font-weight-bold">Mô tả:</h5>
            <div class="description-text" style="text-align: justify; line-height: 1.6;">
                {!! nl2br(e($sach->mo_ta)) !!}
            </div>
        </div>
    </div>
    
    <div class="mt-4 mb-5">
        <a href="{{ url('/sach') }}" class="btn btn-outline-secondary btn-sm">← Quay về danh sách</a>
    </div>
</div>
</x-book-layout>