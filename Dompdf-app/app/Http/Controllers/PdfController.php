<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Pdf;

class PdfController extends Controller
{
    public $name, $email;
    public function makePdf()
    {
//        $pdf = App::make('dompdf.wrapper');
//        $pdf->loadHTML('<h1>Congratulations</h1>');
//        return $pdf->stream();
        $this->name = 'Pobitro Debnath';
        $this->email = 'pobitrodn@gmail.com';

        $pdf = Pdf::loadview('pdfDesign.index', [
            'name' => $this->name,
            'email' => $this->email
        ])->setPaper('a4', 'portrait')->setWarnings(false)->save('myfile.pdf');
        return $pdf->download('pobitrodebCV'. time(). '.pdf');
    }
}
