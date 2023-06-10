<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelamar;

class PageController extends Controller
{
    public function search(Request $request)
    {
        $cari = $request->q;
        $plm = Pelamar::where('nama', 'like', '%' . $cari . '%')
            ->orWhere('nik', 'like', '%' . $cari . '%')
            ->orWhere('bidang_keahlian', 'like', '%' . $cari . '%')
            ->paginate(10);

        $plm->appends($request->all());

        if ($plm->count() === 0) {
            return redirect()->back()->with('flash_not_found', 'No data found for the search query.');
        }

        return view('home', ['key' => 'home', 'plm' => $plm]);
    }

    public function save(Request $request)
    { // delimiter
        $ahli = implode(", ", $request->get('bidang_keahlian'));
        Pelamar::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'tingkat_pendidikan' => $request->tingkat_pendidikan,
            'bidang_keahlian' => $ahli
        ]);
        return redirect('/')->with('flash_added', 'Data Successfully Added');
    }
    public function formadd()
    {
        return view('formadd', ['key' => 'home', '']);
    }
    public function home()
    {

        $plm = Pelamar::orderBy('id', 'desc')->paginate(10);
        $totalCount = $plm->count();
        return view('home', ['key' => 'home', 'plm' => $plm, 'totalCount' => $totalCount]);
    }
    public function account()
    {
        return view('account', ['key' => 'account']);
    }
    public function product()
    {
        $data = [
            [
                'header' => 'Naruto Uzumaki',
                'description' => 'One morning, when Gregor Samsa woke from troubled dreams, 
                 he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted',
                'src' => "https://i.pinimg.com/736x/1f/f6/21/1ff621a090d69c61f3084cc67867fd81.jpg"
            ],
            [
                'header' => 'Monkey D. Luffy',
                'description' => 'One morning, when Gregor Samsa woke from troubled dreams, 
                 he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted',
                'src' => "https://i.pinimg.com/736x/a9/c2/35/a9c235b1413777e571fa7d1f1960cdd9.jpg"
            ],
            [
                'header' => 'Kurosaki Ichigo',
                'description' => 'One morning, when Gregor Samsa woke from troubled dreams, 
                 he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted',
                'src' => "https://avatarfiles.alphacoders.com/321/321106.png"
            ],
            [
                'header' => 'Killua Zoldyck',
                'description' => 'One morning, when Gregor Samsa woke from troubled dreams, 
                 he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted',
                'src' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8NdJym_JcKN2sPaQzr603q0VQIJfZDu57jOMQ8yoYeDRayMvCRvta4l5fwzZaGBzxTog&usqp=CAU"
            ],
            [
                'header' => 'Trafalgar D. Water Law',
                'description' => 'One morning, when Gregor Samsa woke from troubled dreams, 
                 he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted',
                'src' => "https://i.pinimg.com/736x/90/87/ce/9087ced2094d0d38b152b595468995fb.jpg"
            ]

        ];
        return view('product', ['key' => 'product', 'data' => $data]);

    }
    public function reporting()
    {
        return view('reporting', ['key' => 'reporting']);

    }
    public function formedit($id)
    {
        $plm = Pelamar::find($id);
        return view('formedit', ['key' => 'home', 'plm' => $plm]);
    }
    public function update($id, Request $request)
    {
        $ahli = implode(", ", $request->get('bidang_keahlian'));
        $plm = Pelamar::find($id);
        $plm->nik = $request->nik;
        $plm->nama = $request->nama;
        $plm->gender = $request->gender;
        $plm->tingkat_pendidikan = $request->tingkat_pendidikan;
        $plm->bidang_keahlian = $ahli;
        $plm->save();
        //kiri model kanan name view
        return redirect('/')->with('flash_edited', 'Data Successfully Edited');
    }
    public function delete($id)
    {
        $plm = Pelamar::find($id);
        $plm->delete();
        return redirect('/')->with('flash_deleted', 'Data Successfully Deleted');
    }


}