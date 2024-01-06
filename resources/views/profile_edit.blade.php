<div class="row profile-edit">
    <div class="col-lg-5 col-xs-12">
        <div class="row">
            <div class="col-xs-4 noSidePadding">
                <p class="_label" i18n="">Nama pengguna :</p>
            </div>
            <div class="col-xs-8 noSidePadding">
                <p>{{ Auth::user()->name }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 noSidePadding">
                <p class="_label" i18n="">Tingkat Anggota :</p>
            </div>
            <div class="col-xs-8 noSidePadding">
                <div class="memer_leavel">
                    <p class="d-flex">
                        @if (Auth::user()->level == null)
                            <p>NEW MEMBER <b style="color:gold;">VIP</b></p>
                        @else
                            Administrator
                        @endif
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 noSidePadding">
                <p class="_label" i18n="">Nama Sesuai Rekening :</p>
            </div>
            <div class="col-xs-8 noSidePadding">
                <p>{{ Auth::user()->nama_rek }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 noSidePadding">
                <p class="_label" i18n="">Alamat email :</p>
            </div>
            <div class="col-xs-8 noSidePadding">
                <p>{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-12 ">
        <div class="row">
            <div class="col-xs-4 noSidePadding">
                <p class="_label" i18n="">Nomor Kontak :</p>
            </div>
            <div class="col-xs-8 noSidePadding">
                <p>{{ Auth::user()->telp }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 noSidePadding">
                <p class="_label" i18n="">Refferal Kode :</p>
            </div>
            <div class="col-xs-8 noSidePadding">
                <p>
                    <span class="hidenRefUrl" id="hidenRefUrl" style="display: none"></span>
                    <input type="text" class="form-control" placeholder="https://{{ $setting->nama_web }}.com/{{ Auth::user()->name }}" value="" readonly="" id="elCopyText"
                        style="width: 80%;display:inline-block;">&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);"
                        class="btn-copy" id="btn-copy--profile-edit"> <i class="icon-copy" ></i></a>
                </p>
            </div>
        </div>
        {{-- <div class="row d-none">
            <div class="col-xs-4 noSidePadding">
                <p class="_label" i18n="">Pin kedua :</p>
            </div>
            <div class="col-xs-8 noSidePadding">
                <p>
                    <span class="switch_lable">OFF</span>
                    <label class="switch">
                        <input type="checkbox" id="isOnSecondPin" name="is_on_second_pin" value="1">
                        <span class="slider round"></span>
                    </label>
                    <span class="switch_lable">ON</span>
                    <a href="#" class="btn btn-secondary" id="btn-reset2ndpin" style="display:none;">Reset
                        sini</a>
                </p>
            </div>
        </div> --}}
    </div>
</div>

<script>
    $(document).ready(function() {
        /*set domain based ref url*/
        // var base_url = window.location.origin;
        var ref_url = $("#hidenRefUrl").html();
        // var ref_final_url = base_url + ref_url;
        var ref_final_url = ref_url;
        $("#elCopyText").val(ref_final_url);
        // console.log(ref_final_url);
        /*set domain based ref url end*/
    });
</script>
