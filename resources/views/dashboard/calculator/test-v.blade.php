@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card border-left-primary shadow h-80 mb-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Upload Excel - Test V</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-400">
                            <form action="{{ route('test-v.ans') }}" enctype="multipart/form-data" class="form-inline" method="POST">
                                @csrf
                                <input type="file" name="file" class="form-control mb-2 mr-sm-2">
                                <button type="submit" class="btn btn-primary mb-2">Upload</button>
                                {{-- <a href="{{ route('test-v.create') }}" class="btn btn-primary mb-2 mx-3" >Input Manual +</a> --}}
                            </form>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calculator fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid card border-left-info shadow h-80 mb-3">
    <div class="card-header text-center"><h4>Daftar Nilai Tes V</h4></div>
    <form class="form-inline" action="{{ route('test-n1') }}">
        <label class="sr-only" for="inlineFormInputName2">Name</label>
        <input name="search" type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Cari nama atau tanggal ...">
        <button type="submit" class="btn btn-primary mb-2">
            <i class="fas fa-search"></i>
        </button>
    </form>
    
    <div class="row">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Tanggal</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($v as $item)
                        {{-- hitung nilai --}}
                        @php
                            $nilaiN = 0;
                            $nilaiA = 0;
                            $nilaiC = 0;
                            strtoupper($item->ans1) == strtoupper($answer[1] ) ? ($type[1] == 'N' ? $nilaiN +=1 : ($type[1] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans2) == strtoupper($answer[2] ) ? ($type[2] == 'N' ? $nilaiN +=1 : ($type[2] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans3) == strtoupper($answer[3] ) ? ($type[3] == 'N' ? $nilaiN +=1 : ($type[3] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans4) == strtoupper($answer[4] ) ? ($type[4] == 'N' ? $nilaiN +=1 : ($type[4] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans5) == strtoupper($answer[5] ) ? ($type[5] == 'N' ? $nilaiN +=1 : ($type[5] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans6) == strtoupper($answer[6] ) ? ($type[6] == 'N' ? $nilaiN +=1 : ($type[6] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans7) == strtoupper($answer[7] ) ? ($type[7] == 'N' ? $nilaiN +=1 : ($type[7] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans8) == strtoupper($answer[8] ) ? ($type[8] == 'N' ? $nilaiN +=1 : ($type[8] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans9) == strtoupper($answer[9] ) ? ($type[9] == 'N' ? $nilaiN +=1 : ($type[9] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans10) == strtoupper($answer[10]) ? ($type[10] == 'N' ? $nilaiN +=1 : ($type[10] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans11) == strtoupper($answer[11]) ? ($type[11] == 'N' ? $nilaiN +=1 : ($type[11] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans12) == strtoupper($answer[12]) ? ($type[12] == 'N' ? $nilaiN +=1 : ($type[12] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans13) == strtoupper($answer[13]) ? ($type[13] == 'N' ? $nilaiN +=1 : ($type[13] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans14) == strtoupper($answer[14]) ? ($type[14] == 'N' ? $nilaiN +=1 : ($type[14] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans15) == strtoupper($answer[15]) ? ($type[15] == 'N' ? $nilaiN +=1 : ($type[15] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans16) == strtoupper($answer[16]) ? ($type[16] == 'N' ? $nilaiN +=1 : ($type[16] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans17) == strtoupper($answer[17]) ? ($type[17] == 'N' ? $nilaiN +=1 : ($type[17] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans18) == strtoupper($answer[18]) ? ($type[18] == 'N' ? $nilaiN +=1 : ($type[18] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans19) == strtoupper($answer[19]) ? ($type[19] == 'N' ? $nilaiN +=1 : ($type[19] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans20) == strtoupper($answer[20]) ? ($type[20] == 'N' ? $nilaiN +=1 : ($type[20] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans21) == strtoupper($answer[21]) ? ($type[21] == 'N' ? $nilaiN +=1 : ($type[21] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans22) == strtoupper($answer[22]) ? ($type[22] == 'N' ? $nilaiN +=1 : ($type[22] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans23) == strtoupper($answer[23]) ? ($type[23] == 'N' ? $nilaiN +=1 : ($type[23] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans24) == strtoupper($answer[24]) ? ($type[24] == 'N' ? $nilaiN +=1 : ($type[24] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans25) == strtoupper($answer[25]) ? ($type[25] == 'N' ? $nilaiN +=1 : ($type[25] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans26) == strtoupper($answer[26]) ? ($type[26] == 'N' ? $nilaiN +=1 : ($type[26] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans27) == strtoupper($answer[27]) ? ($type[27] == 'N' ? $nilaiN +=1 : ($type[27] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans28) == strtoupper($answer[28]) ? ($type[28] == 'N' ? $nilaiN +=1 : ($type[28] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans29) == strtoupper($answer[29]) ? ($type[29] == 'N' ? $nilaiN +=1 : ($type[29] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans30) == strtoupper($answer[30]) ? ($type[30] == 'N' ? $nilaiN +=1 : ($type[30] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans31) == strtoupper($answer[31]) ? ($type[31] == 'N' ? $nilaiN +=1 : ($type[31] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans32) == strtoupper($answer[32]) ? ($type[32] == 'N' ? $nilaiN +=1 : ($type[32] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans33) == strtoupper($answer[33]) ? ($type[33] == 'N' ? $nilaiN +=1 : ($type[33] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans34) == strtoupper($answer[34]) ? ($type[34] == 'N' ? $nilaiN +=1 : ($type[34] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans35) == strtoupper($answer[35]) ? ($type[35] == 'N' ? $nilaiN +=1 : ($type[35] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans36) == strtoupper($answer[36]) ? ($type[36] == 'N' ? $nilaiN +=1 : ($type[36] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans37) == strtoupper($answer[37]) ? ($type[37] == 'N' ? $nilaiN +=1 : ($type[37] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans38) == strtoupper($answer[38]) ? ($type[38] == 'N' ? $nilaiN +=1 : ($type[38] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans39) == strtoupper($answer[39]) ? ($type[39] == 'N' ? $nilaiN +=1 : ($type[39] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans40) == strtoupper($answer[40]) ? ($type[40] == 'N' ? $nilaiN +=1 : ($type[40] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans41) == strtoupper($answer[41]) ? ($type[41] == 'N' ? $nilaiN +=1 : ($type[41] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans42) == strtoupper($answer[42]) ? ($type[42] == 'N' ? $nilaiN +=1 : ($type[42] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans43) == strtoupper($answer[43]) ? ($type[43] == 'N' ? $nilaiN +=1 : ($type[43] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans44) == strtoupper($answer[44]) ? ($type[44] == 'N' ? $nilaiN +=1 : ($type[44] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans45) == strtoupper($answer[45]) ? ($type[45] == 'N' ? $nilaiN +=1 : ($type[45] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans46) == strtoupper($answer[46]) ? ($type[46] == 'N' ? $nilaiN +=1 : ($type[46] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans47) == strtoupper($answer[47]) ? ($type[47] == 'N' ? $nilaiN +=1 : ($type[47] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans48) == strtoupper($answer[48]) ? ($type[48] == 'N' ? $nilaiN +=1 : ($type[48] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans49) == strtoupper($answer[49]) ? ($type[49] == 'N' ? $nilaiN +=1 : ($type[49] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans50) == strtoupper($answer[50]) ? ($type[50] == 'N' ? $nilaiN +=1 : ($type[50] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans51) == strtoupper($answer[51]) ? ($type[51] == 'N' ? $nilaiN +=1 : ($type[51] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans52) == strtoupper($answer[52]) ? ($type[52] == 'N' ? $nilaiN +=1 : ($type[52] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans53) == strtoupper($answer[53]) ? ($type[53] == 'N' ? $nilaiN +=1 : ($type[53] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans54) == strtoupper($answer[54]) ? ($type[54] == 'N' ? $nilaiN +=1 : ($type[54] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans55) == strtoupper($answer[55]) ? ($type[55] == 'N' ? $nilaiN +=1 : ($type[55] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans56) == strtoupper($answer[56]) ? ($type[56] == 'N' ? $nilaiN +=1 : ($type[56] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans57) == strtoupper($answer[57]) ? ($type[57] == 'N' ? $nilaiN +=1 : ($type[57] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans58) == strtoupper($answer[58]) ? ($type[58] == 'N' ? $nilaiN +=1 : ($type[58] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans59) == strtoupper($answer[59]) ? ($type[59] == 'N' ? $nilaiN +=1 : ($type[59] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans60) == strtoupper($answer[60]) ? ($type[60] == 'N' ? $nilaiN +=1 : ($type[60] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans61) == strtoupper($answer[61]) ? ($type[61] == 'N' ? $nilaiN +=1 : ($type[61] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans62) == strtoupper($answer[62]) ? ($type[62] == 'N' ? $nilaiN +=1 : ($type[62] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans63) == strtoupper($answer[63]) ? ($type[63] == 'N' ? $nilaiN +=1 : ($type[63] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans64) == strtoupper($answer[64]) ? ($type[64] == 'N' ? $nilaiN +=1 : ($type[64] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans65) == strtoupper($answer[65]) ? ($type[65] == 'N' ? $nilaiN +=1 : ($type[65] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans66) == strtoupper($answer[66]) ? ($type[66] == 'N' ? $nilaiN +=1 : ($type[66] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans67) == strtoupper($answer[67]) ? ($type[67] == 'N' ? $nilaiN +=1 : ($type[67] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans68) == strtoupper($answer[68]) ? ($type[68] == 'N' ? $nilaiN +=1 : ($type[68] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans69) == strtoupper($answer[69]) ? ($type[69] == 'N' ? $nilaiN +=1 : ($type[69] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans70) == strtoupper($answer[70]) ? ($type[70] == 'N' ? $nilaiN +=1 : ($type[70] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans71) == strtoupper($answer[71]) ? ($type[71] == 'N' ? $nilaiN +=1 : ($type[71] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans72) == strtoupper($answer[72]) ? ($type[72] == 'N' ? $nilaiN +=1 : ($type[72] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans73) == strtoupper($answer[73]) ? ($type[73] == 'N' ? $nilaiN +=1 : ($type[73] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans74) == strtoupper($answer[74]) ? ($type[74] == 'N' ? $nilaiN +=1 : ($type[74] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans75) == strtoupper($answer[75]) ? ($type[75] == 'N' ? $nilaiN +=1 : ($type[75] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans76) == strtoupper($answer[76]) ? ($type[76] == 'N' ? $nilaiN +=1 : ($type[76] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans77) == strtoupper($answer[77]) ? ($type[77] == 'N' ? $nilaiN +=1 : ($type[77] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans78) == strtoupper($answer[78]) ? ($type[78] == 'N' ? $nilaiN +=1 : ($type[78] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans79) == strtoupper($answer[79]) ? ($type[79] == 'N' ? $nilaiN +=1 : ($type[79] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans80) == strtoupper($answer[80]) ? ($type[80] == 'N' ? $nilaiN +=1 : ($type[80] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans81) == strtoupper($answer[81]) ? ($type[81] == 'N' ? $nilaiN +=1 : ($type[81] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans82) == strtoupper($answer[82]) ? ($type[82] == 'N' ? $nilaiN +=1 : ($type[82] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans83) == strtoupper($answer[83]) ? ($type[83] == 'N' ? $nilaiN +=1 : ($type[83] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans84) == strtoupper($answer[84]) ? ($type[84] == 'N' ? $nilaiN +=1 : ($type[84] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans85) == strtoupper($answer[85]) ? ($type[85] == 'N' ? $nilaiN +=1 : ($type[85] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans86) == strtoupper($answer[86]) ? ($type[86] == 'N' ? $nilaiN +=1 : ($type[86] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans87) == strtoupper($answer[87]) ? ($type[87] == 'N' ? $nilaiN +=1 : ($type[87] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans88) == strtoupper($answer[88]) ? ($type[88] == 'N' ? $nilaiN +=1 : ($type[88] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans89) == strtoupper($answer[89]) ? ($type[89] == 'N' ? $nilaiN +=1 : ($type[89] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans90) == strtoupper($answer[90]) ? ($type[90] == 'N' ? $nilaiN +=1 : ($type[90] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans91) == strtoupper($answer[91]) ? ($type[91] == 'N' ? $nilaiN +=1 : ($type[91] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans92) == strtoupper($answer[92]) ? ($type[92] == 'N' ? $nilaiN +=1 : ($type[92] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans93) == strtoupper($answer[93]) ? ($type[93] == 'N' ? $nilaiN +=1 : ($type[93] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans94) == strtoupper($answer[94]) ? ($type[94] == 'N' ? $nilaiN +=1 : ($type[94] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans95) == strtoupper($answer[95]) ? ($type[95] == 'N' ? $nilaiN +=1 : ($type[95] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans96) == strtoupper($answer[96]) ? ($type[96] == 'N' ? $nilaiN +=1 : ($type[96] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans97) == strtoupper($answer[97]) ? ($type[97] == 'N' ? $nilaiN +=1 : ($type[97] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans98) == strtoupper($answer[98]) ? ($type[98] == 'N' ? $nilaiN +=1 : ($type[98] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans99) == strtoupper($answer[99]) ? ($type[99] == 'N' ? $nilaiN +=1 : ($type[99] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                            strtoupper($item->ans100) == strtoupper($answer[100]) ? ($type[100] == 'N' ? $nilaiN +=1 : ($type[100] == 'A' ? $nilaiA +=1 : $nilaiC +=1) ) : null;
                        @endphp
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>
                            N : {{ $nilaiN }} dari 33 <br>
                            A : {{ $nilaiA }} dari 34 <br>
                            C : {{ $nilaiC }} dari 33
                        </td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href="{{ route('test-v.show', $item->id) }}">Detail</a>
                        </td>
                        {{-- <td>
                            <form action="{{ route('test-n1.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $v->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>
@endsection