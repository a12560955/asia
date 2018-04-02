@extends('layouts.base')
@section('title','申請副木專案')
@section('nav')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">首頁</a></li>
    <li class="breadcrumb-item"><a href="#">會員專區</a></li>
    <li class="breadcrumb-item" aria-current="page">病患會員</li>
</ol>
@endsection
@section('content')
<div class="d-flex flex-row">
    <div class="p-1">
        <br><br>
        <nav class="nav flex-column">
            <a class="btn btn-info"  style="line-height:50px;" href="#" role="button">會員資料</a>
            <br>
            <a class="btn btn-danger dropdown-toggle text-center" style="line-height:28px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">申請副木<br>專案</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">個案資料</a>
                <a class="dropdown-item bg-danger" href="#">副木樣式選擇</a>
            </div>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">歷史紀錄</a>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">帳戶設定</a>
        </nav>
    </div>
    <div class="p-1 w-100">
        <div class="card">
            <div class="card-header w-100">
                <h4 class="text-center">申請副木專案</h4>
            </div>
            <div class="card-body w-100">
                <h6><b>同意書</b></h6>
                <textarea class="form-control text-left rounded" style="resize: none;" id="exampleFormControlTextarea1" rows="25">
有鑒於（甲方——委託人）同意提供（乙方——承接業者)特定有關創意、發明或產品之保密資訊，並運用於利益目的之開發、製造、販售及／或共營事業。
有鑒於（乙方）同意只在上述目的下進行回顧、審查、偵查或獲取該保密資訊，並允許以它種方式持有依據本協議所明定項目之保密資訊。
必須了解，在下列情況（甲方）必須或應該提供（乙方）特定保密資訊，並進一步允許（乙方）擁有與（甲方）之代表討論或訪問的權利：

1 . （乙方）同意在信賴及保密狀態下持有保密或所擁有之資訊，或營業秘密(保密資訊)，並同意只在預期目的下使用該資訊，而不能用於任何其他目的，或向第三人揭露。

2 . 未取得（甲方）同意，不能複製或持有任何書寫之資訊或所提供之範本。

3 . 任何討論之結果，或在（甲方）要求下，所有保密資訊包含範本、書寫記錄、圖片、草圖、模型、備忘錄或所為之記錄須歸還給（甲方）。

4 . 保密資訊不得透露給任何員工、顧問或第三人，除非他們經（甲方）核可，同意執行或受本協議所訂各項目之約束。 

第七條　技術支援
乙方同意自甲方專案經理人於書面簽名確認標的內容完成後之    日內，於不需變更網站功能架構之前提下，免費提供甲方必要之網頁或程式修改。
第八條　規格變更
1.甲方應於需求訪談階段確認本標的物之規格內容。
2.甲方對於本標的物網頁設計部分至多可修改   次如超過   次以上之修改，乙方得依甲方需求提出報價，完成之時間表雙方另議訂之。
3.甲方於本標的物完成上線後，如欲變更規格及內容，乙方得依甲方需求提出報價，完成之時間表雙方另議訂之。
第九條　保固維護
1.乙方自此專案上線且正式驗收完成之日起，提供    年    個月的免費保固，包括網頁及程式之修正。
2.甲方得視需要於約滿前    個月與乙方另訂維護合約，保固期滿後，甲方修改網站或教育訓練之要求應與乙方另定合約為之。
第十條	著作財產權
1.乙方為甲方製作之專案，不得違反著作權法，若有違反著作權之爭議，甲方得拒絕驗收或支付費用，且相關法律責任由乙方負責。
2.甲方於付清所有價款後，保有對專案的修改權，且著作財產權歸甲方所有。乙方則有完成專案之公開展示權及複製權--複製權行使前需事先知會甲方。
第十一條 保密約定
乙方同意因參與本專案而知悉或持有甲方之商業機密及其他機密資訊，負有保密義務，乙方不得以任何方法洩漏或公開予其他第三人，亦不得為自己或其他人之利益，使用該資訊。乙方違反本契約之約定者，甲方有權立即終止本契約，若甲方受有損害時，甲方並得向乙方請求損害賠償。乙方員工之違約行為，亦視為乙方之違約。

                </textarea>
                <div class="custom-control custom-checkbox justify-content-end">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">我已完全閱讀並同意以上內容</label>
                </div>
                <br>
                <div class="w-100 text-center">
                    <button type="button" class="btn">確認</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('bottom')