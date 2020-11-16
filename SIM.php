<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once 'Manusia.php';

class SIM extends Manusia
{
    private $height;
    private $work;
    private $simType;

    public function __construct($name, $address, $birthPlace, $birthDate, $sex, $height, $work, $simType) {
        parent::__construct($name, $address, $birthPlace, $birthDate, $sex);
        $this->height = $height;
        $this->work = $work;
        $this->simType = $simType;
    }

    private function generateNoSIM() {
        $i = 0;
        $noSIM = '';
        while ($i < 12) {
            $noSIM .= mt_rand(0, 9);
            $i++;
        }
        return $noSIM;
    }

    private function dueDate() {
        return $due = date('d-m-Y', strtotime('+5 years'));
    }

    public function printSIM() {
        $style = '
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;}
                .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                  overflow:hidden;padding:10px 5px;word-break:normal;}
                .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
                .tg .tg-baqh{text-align:center;vertical-align:top}
                .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
                .tg .tg-lqy6{text-align:right;vertical-align:top}
                .tg .tg-e9v8{font-size:15px;text-align:center;vertical-align:top}
                .tg .tg-0lax{text-align:left;vertical-align:top}
            </style>
        ';

        $SIM = '
            <!doctype html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            </head>
            <body>
                <table class="tg" align="center">
                    <thead>
                        <tr>
                            <th class="tg-c3ow">Lambang Polri</th>
                            <th class="tg-e9v8">Surat Izin Mengemudi</th>
                            <th class="tg-e9v8">';
                                $SIM .= $this->simType;
                                $SIM .= '<br>Jabar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="tg-baqh">Picture</td>';
                                $SIM .= '<td class="tg-0lax">';
                                $SIM .= '<p>Nama          : '. $this->name . "</p>";
                                $SIM .= '<p>Alamat        : '. $this->address . "</p>";
                                $SIM .= '<p>Tempat lahir  : '. $this->birthPlace . "</p>";
                                $SIM .= '<p>Tanggal lahir : '. $this->birthDate . "</p>";
                                $SIM .= '<p>Tinggi        : '. $this->height . "cm</p>";
                                $SIM .= '<p>Pekerjaan     : '. $this->work . "</p>";
                                $SIM .= '<p>No SIM        : '. $this->generateNoSIM() . "</p>";
                                $SIM .= '<p>Berlaku s/d   : '. $this->dueDate() . "</p>";
                            $SIM .= '</td>
                            <td class="tg-baqh">';
                                $SIM .= '<p>'. strtoupper($this->sex) . "</p>";
                            $SIM .= '</td>
                        </tr>
                        <tr>
                            <td class="tg-lqy6" colspan="3">';
                                $SIM .= '<p>Dibuat pada    : '. date('d-m-Y') . "</p>";
                            $SIM .= '</td>
                        </tr>
                    </tbody>
                </table>
            </body>
            </html>
        ';

        $mpdf = new \Mpdf\Mpdf();

        $mpdf->WriteHTML($style,\Mpdf\HTMLParserMode::HEADER_CSS);
        $mpdf->WriteHTML($SIM,\Mpdf\HTMLParserMode::HTML_BODY);
        $mpdf->Output("SIM.pdf", "D");
    }
}