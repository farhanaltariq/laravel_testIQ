@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('content')
{{-- <div class="container-fluid card border-left-info shadow h-80 mb-3">
    <div class="card-header text-center"><h4>Kunci Jawaban</h4></div>
    <table class="table table-borderless">
        <thead>
            <th></th>
            @php
                for ($i=1; $i <= 25; $i++) { 
                    echo '<th>'.$i.'</th>';
                }
            @endphp
        </thead>
        <tbody>
            <tr>
                <td></td>
                @php
                    for($i = 1; $i <= 25; $i++) {
                        echo '<td>'.$answer[$i].'</td>';
                    }
                @endphp
            </tr>
        </tbody>
        <thead>
            <th></th>
            @php
                for ($i=26; $i <= 50; $i++) { 
                    echo '<th>'.$i.'</th>';
                }
            @endphp
        </thead>
        <tbody>
            <tr>
                <td></td>
                @php
                    for($i = 26; $i <= 50; $i++) {
                        echo '<td>'.$answer[$i].'</td>';
                    }
                @endphp
            </tr>
        </tbody>
        <thead>
            <th></th>
            @php
                for ($i=51; $i <= 75; $i++) { 
                    echo '<th>'.$i.'</th>';
                }
            @endphp
        </thead>
        <tbody>
            <tr>
                <td></td>
                @php
                    for($i = 51; $i <= 75; $i++) {
                        echo '<td>'.$answer[$i].'</td>';
                    }
                @endphp
            </tr>
        </tbody>
        <thead>
            <th></th>
            @php
                for ($i=76; $i <= 100; $i++) { 
                    echo '<th>'.$i.'</th>';
                }
            @endphp
        </thead>
        <tbody>
            <tr>
                <td></td>
                @php
                    for($i = 76; $i <= 100; $i++) {
                        echo '<td>'.$answer[$i].'</td>';
                    }
                @endphp
            </tr>
        </tbody>
    </table>
</div> --}}

<div class="container-fluid card border-left-info shadow h-80 mb-3">
        <div class="row">
            <div class="card-body">
                <table class="table table-xs table-borderless">
                    <thead>
                        <tr>
                            <th>Tanggal Tes</th>
                            <td>{{ $v->created_at ?? null}}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>{{ $v->nama ?? null}}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>{{ $v->tgl_lahir ?? null}}</td>
                        </tr>
                        <tr>
                            <th>Ruang Kelas</th>
                            <td>{{ $v->ruang_kelas ?? null }}</td>
                        </tr>
                        <tr>
                            <th>Pilihan Jurusan</th>
                            <td>{{ $v->pil_jurusan ?? null }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>

    <div class="container-fluid card border-left-info shadow h-80 mb-3">
    <div class="card-header text-center"><h4>Jawaban Tes V</h4></div>
        <div class="row">
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                {{ $v->ans1 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                {{ $v->ans2 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                {{ $v->ans3 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                {{ $v->ans4 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                {{ $v->ans5 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                {{ $v->ans6 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                {{ $v->ans7 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                {{ $v->ans8 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>
                                {{ $v->ans9 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>
                                {{ $v->ans10 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>
                                {{ $v->ans11 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>
                                {{ $v->ans12 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>
                                {{ $v->ans13 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>
                                {{ $v->ans14 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>
                                {{ $v->ans15 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>
                                {{ $v->ans16 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>
                                {{ $v->ans17 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>
                                {{ $v->ans18 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>
                                {{ $v->ans19 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>
                                {{ $v->ans20 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>
                                {{ $v->ans21 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>
                                {{ $v->ans22 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>
                                {{ $v->ans23 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>
                                {{ $v->ans24 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>
                                {{ $v->ans25 ?? null }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>26</td>
                            <td>
                                {{ $v->ans26 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>
                                {{ $v->ans27 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>
                                {{ $v->ans28 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>
                                {{ $v->ans29 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>
                                {{ $v->ans30 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>
                                {{ $v->ans31 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>
                                {{ $v->ans32 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>
                                {{ $v->ans33 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>
                                {{ $v->ans34 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>
                                {{ $v->ans35 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>
                                {{ $v->ans36 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>
                                {{ $v->ans37 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>
                                {{ $v->ans38 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>
                                {{ $v->ans39 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>
                                {{ $v->ans40 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td>
                                {{ $v->ans41 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td>
                                {{ $v->ans42 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>43</td>
                            <td>
                                {{ $v->ans43 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td>
                                {{ $v->ans44 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>45</td>
                            <td>
                                {{ $v->ans45 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>46</td>
                            <td>
                                {{ $v->ans46 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td>
                                {{ $v->ans47 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>48</td>
                            <td>
                                {{ $v->ans48 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>49</td>
                            <td>
                                {{ $v->ans49 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td>
                                {{ $v->ans50 ?? null }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>51</td>
                            <td>
                                {{ $v->ans51 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>52</td>
                            <td>
                                {{ $v->ans52 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>53</td>
                            <td>
                                {{ $v->ans53 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>54</td>
                            <td>
                                {{ $v->ans54 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>55</td>
                            <td>
                                {{ $v->ans55 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>56</td>
                            <td>
                                {{ $v->ans56 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>57</td>
                            <td>
                                {{ $v->ans57 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>58</td>
                            <td>
                                {{ $v->ans58 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td>
                                {{ $v->ans59 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>60</td>
                            <td>
                                {{ $v->ans60 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>61</td>
                            <td>
                                {{ $v->ans61 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>62</td>
                            <td>
                                {{ $v->ans62 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>63</td>
                            <td>
                                {{ $v->ans63 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>64</td>
                            <td>
                                {{ $v->ans64 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>65</td>
                            <td>
                                {{ $v->ans65 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>66</td>
                            <td>
                                {{ $v->ans66 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>67</td>
                            <td>
                                {{ $v->ans67 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>68</td>
                            <td>
                                {{ $v->ans68 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>69</td>
                            <td>
                                {{ $v->ans69 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>70</td>
                            <td>
                                {{ $v->ans70 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>71</td>
                            <td>
                                {{ $v->ans71 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>72</td>
                            <td>
                                {{ $v->ans72 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>73</td>
                            <td>
                                {{ $v->ans73 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>74</td>
                            <td>
                                {{ $v->ans74 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>75</td>
                            <td>
                                {{ $v->ans75 ?? null }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>76</td>
                            <td>
                                {{ $v->ans76 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>77</td>
                            <td>
                                {{ $v->ans77 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>78</td>
                            <td>
                                {{ $v->ans78 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>79</td>
                            <td>
                                {{ $v->ans79 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>80</td>
                            <td>
                                {{ $v->ans80 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>81</td>
                            <td>
                                {{ $v->ans81 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>82</td>
                            <td>
                                {{ $v->ans82 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>83</td>
                            <td>
                                {{ $v->ans83 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>84</td>
                            <td>
                                {{ $v->ans84 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>85</td>
                            <td>
                                {{ $v->ans85 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>86</td>
                            <td>
                                {{ $v->ans86 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>87</td>
                            <td>
                                {{ $v->ans87 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>88</td>
                            <td>
                                {{ $v->ans88 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>89</td>
                            <td>
                                {{ $v->ans89 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>90</td>
                            <td>
                                {{ $v->ans90 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>91</td>
                            <td>
                                {{ $v->ans91 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>92</td>
                            <td>
                                {{ $v->ans92 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>93</td>
                            <td>
                                {{ $v->ans93 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>94</td>
                            <td>
                                {{ $v->ans94 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>95</td>
                            <td>
                                {{ $v->ans95 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>96</td>
                            <td>
                                {{ $v->ans96 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>97</td>
                            <td>
                                {{ $v->ans97 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>98</td>
                            <td>
                                {{ $v->ans98 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>99</td>
                            <td>
                                {{ $v->ans99 ?? null }}
                            </td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>
                                {{ $v->ans100 ?? null }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            

        </div>
    </div>
</form>
    @endsection