<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Respondent;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function hrCalculation()
    {
        return view('guest.hr-calculation');
    }

    public function resultCalculationHrForm(Request $request)
    {

        $respondent = Respondent::create([
            'name' => $request->name,
            'instance' => $request->instance,
            'position' => $request->position,
            'email' => $request->email,
            'whatsapp_number' => $request->whatsapp_number
        ]);

        $arrAnswer = [];

        for ($i = 1; $i < 11; $i++) {
            $answer = $request->input('question' . $i);
            array_push($arrAnswer, $answer);

            $answerData = new Answer([
                'type' => 'HR',
                'question' => 'question' . $i,
                'answer' => $answer
            ]);

            $respondent->answers()->save($answerData);
        }

        $countValues = array_count_values($arrAnswer);

        if ($countValues['Ya'] <= 3) {
            $messages = "Ambil tindakan
                        segera. Bisnis Anda berisiko mengalami salah satu atau beberapa
                        hal yang sangat serius.
                    ";
        } else if ($countValues['Ya'] >= 4 && $countValues['Ya'] <= 6) {
            $messages = "
            Diperlukan tindakan
                lebih lanjut. Anda telah menanggung sebagian risiko SDM, namun
                masih banyak area yang perlu Anda tingkatkan sebelum Anda dapat
                yakin bahwa Anda telah sepenuhnya menerapkan pengelolaan HR
                sesuai Undang-Undang Ketenagakerjaan.
            ";
        } else {
            $messages = "
                Anda melakukannya
                dengan baik, namun masih ada ruang untuk ditingkatkan. Beberapa
                permasalahan masih perlu ditangani dan tidak boleh diabaikan.
            ";
        }

        $data = [
            'messages' => $messages,
            'type' => 'HR'
        ];

        return view('guest.result', $data);
    }

    public function businessCalculation()
    {
        return view('guest.business-calculation');
    }

    public function resultCalculationBusinessForm(Request $request)
    {
        $respondent = Respondent::create([
            'name' => $request->name,
            'instance' => $request->instance,
            'position' => $request->position,
            'email' => $request->email,
            'whatsapp_number' => $request->whatsapp_number
        ]);

        $arrAnswer = [];

        for ($i = 1; $i < 15; $i++) {
            $answer = $request->input('question' . $i);
            array_push($arrAnswer, $answer);

            $answerData = new Answer([
                'type' => 'Business',
                'question' => 'question' . $i,
                'answer' => $answer
            ]);

            $respondent->answers()->save($answerData);
        }

        $total = array_sum($arrAnswer);

        if ($total > 30) {
            $messages = "kemungkinan besar bisnis Anda akan sehat di tahun-tahun mendatang. Anda mungkin ingin mempertimbangkan peluang pertumbuhan strategis atau penyempurnaan lainnya untuk membantu Anda kesuksesan jangka panjang. ";
        } else if ($total >= 20 && $total <= 30) {
            $messages = "kemungkinan besar Anda akan mengalami rasa sakit dan nyeri, baik secara internal berkaitan dengan pengiriman dan kinerja, dari arus kas atau keuangan perspektif, atau dari faktor lain. Pertimbangkan untuk mencari nasihat dan bantuan dari seorang penasihat jelajahi dan rekomendasikan beberapa solusi.";
        } else {
            $messages = "kemungkinan besar inilah waktunya untuk melakukan ‘operasi’ yang signifikan. Tinjauan kinerja atau opsi serupa lainnya, termasuk restrukturisasi, rencana penyelesaian atau kemungkinan penjualan atau divestasi, dapat dilakukan perlu dipertimbangkan.";
        }

        $data = [
            'messages' => $messages,
            'type' => 'Business',
            'skor' => $total
        ];

        return view('guest.result', $data);
    }
}
