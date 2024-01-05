<!doctype html>
<html lang="en">

<head>
</head>
<style type="text/css">
    @font-face {
        font-family: SimHei;
        src: url('{{base_path().' /storage/'}}fonts/simhei.ttf') format('truetype')
    }

    /*         
    * {
        font-family: SimHei;
    }
    */
    table {
        border-spacing: 0px;
        width: 100%
    }

    table,
    td,
    th {
        border-collapse: collapse;
        font-family: SimHei, sans-serif;
    }

    table tr {
        line-height: 24px;
    }

    table td {
        border: 1px solid;
        padding-left: 5px;
    }
</style>

<body>
    <div class="wrapper" style="font-family: SimHei">
        <div class="wrapper">
            <div class="error-spacer"></div>
            <div role="main" class="main">
                <div style="text-align: center;font-size: 24px;">2024年澳門柔道教練/裁判員培訓課程報名表</div>
                <table style="margin-bottom: 24px;text-align: center;">
                    <tr>
                        <td colspan="7" style="text-align:center;font-size:20px;background-color:lightgray;padding-top:10px;padding-bottom: 10px;">個人基本信息</td>
                    </tr>
                    <tr>
                        <td style="width:80px">姓名</td>
                        <td colspan="2">{{$table_data['姓名(中文)']??''}}</td>
                        <td>性别</td>
                        <td colspan="2">{{$table_data['性別']??''}}</td>
                        <td rowspan="4">@php
                            if($table_data['相片']!=null){
                            echo '<img src="'.public_path($bannerImage=$table_data['相片']) .'" width="100px/>"'; 
                            }
                            echo '相<br>片'
                        @endphp
                    </td>
                    </tr>
                    <tr>
                        <td>出生年月</td>
                        <td colspan=" 2">{{$table_data['出生日期']??''}}</td>
                        <td>出生地點</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>身份證號</td>
                        <td colspan="2"></td>
                        <td>國籍</td>
                        <td colspan="2">{{$table_data['國籍']??''}}</td>
                    </tr>
                    <tr>
                        <td>學歷</td>
                        <td style="width: 120px;"></td>
                        <td style="width: 85px;">學位</td>
                        <td style="width: 85px;">MBA</td>
                        <td style="width: 85px;">畢業年份</td>
                        <td style="width: 65px;"></td>
                    </tr>
                    <tr>
                        <td>英語水平</td>
                        <td colspan="3"></td>
                        <td colspan="2" style="text-align: left;">執教 &#10004; /裁判&#x2610; 年期</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>屬會</td>
                        <td colspan="3">{{$table_data['屬會']??''}}</td>
                        <td colspan="2">柔道等級</td>
                        <td>{{$table_data['帶別']??''}}</td>
                    </tr>
                    <tr>
                        <td>聯繫電話</td>
                        <td colspan="2">{{$table_data['連絡電話']??''}}</td>
                        <td>E-mail</td>
                        <td colspan="3">{{$table_data['E-mail']??''}}</td>
                    </tr>
                    <tr>
                        <td>通訊地址</td>
                        <td colspan="6"></td>
                    </tr>
                    <tr>
                        <td>工作單位</td>
                        <td colspan="2"></td>
                        <td>職位</td>
                        <td colspan="3"></td>
                    </tr>
                </table>
                <table style="text-align: center;">
                    <tr>
                        <td colspan="3" style="text-align:center;font-size:20px;background-color:lightgray;padding-top:10px;padding-bottom: 10px;">培訓經歷</td>
                    </tr>
                    <tr>
                        <td width="25%">主辦單位</td>
                        <td width="50%">培訓班名稱</td>
                        <td width="25%">時間</td>
                    </tr>
                    <tr>
                        <td width="25%" height="24px"></td>
                        <td width="50%"></td>
                        <td width="25%"></td>
                    </tr>
                    <tr>
                        <td width="25%" height="24px"></td>
                        <td width="50%"></td>
                        <td width="25%"></td>
                    </tr>
                    <tr>
                        <td width="25%" height="24px"></td>
                        <td width="50%"></td>
                        <td width="25%"></td>
                    </tr>
                    <tr>
                        <td width="25%" height="24px"></td>
                        <td width="50%"></td>
                        <td width="25%"></td>
                    </tr>
                </table>
                <div style="padding:20px 0px 20px 0px;border: 1px solid;margin-top: 24px;">
                    申請人簽名：
                </div>
                <div style="font-size:20px;text-align: center;margin-top: 24px;">以下由澳門柔道協會及申請人所屬協會/道場/俱樂部/學校填寫：</div>
                <div>
                    <table>
                        <tr style="font-size:18px;">
                            <td width="50%" style="padding:10px">提名屬會：<br><br><br><br>
                                <div style="text-align: right;padding-right: 22px;">（蓋章）</div>
                                <div style="text-align: right;letter-spacing:6px">年 月 日</div>
                            </td>
                            <td width="50%" style="padding:10px">澳門柔道協會批覆：<br><br><br><br>
                                <div style="text-align: right;padding-right: 22px;">（蓋章）</div>
                                <div style="text-align: right;letter-spacing:6px">年 月 日</div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>