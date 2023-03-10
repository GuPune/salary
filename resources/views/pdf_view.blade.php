<!DOCTYPE html>
<html lang="th" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>

        @font-face {
            font-family: 'THSarabunNew';
            src: url("{{ public_path('fonts/SukhumvitSet-Light.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'SukhumvitSet';
            src: url("{{ public_path('fonts/SukhumvitSet-Bold.ttf') }}") format('truetype');
        }
        body {
            font-family: "THSarabunNew"!important;
            font-size: 16px!important;
        }
        .center{
            text-align: center;
        }
        .right{
            text-align: right;
        }
        .title{
            font-size: 24px!important;
        }
        .sub-title{
            font-size: 20px!important;
        }
        .head-title{
            font-family: "SukhumvitSet"!important;
            font-size: 14px!important;
        }
        .detail{
            font-size: 14px!important;
        }
        .table{
            font-family: "THSarabunNew"!important;
        }
        .thai{
            font-family: "THSarabunNew"!important;
        }
        .color{
            background-color: #e3e6f0;
        }
        .line-top{
            border-bottom: 1px solid #ddd;
        }
        .line-bottom{
            border-bottom: 1px solid #ddd;
        }
        .red{
            color: #FF0000;
        }

        .salary-slip{
      margin: 15px;
      .empDetail {
        width: 100%;
        text-align: left;
        border: 2px solid black;
        border-collapse: collapse;
        table-layout: fixed;
      }

      .head {
        margin: 10px;
        margin-bottom: 50px;
        width: 100%;
      }

      .companyName {
        text-align: right;
        font-size: 25px;
        font-weight: bold;
      }

      .salaryMonth {
        text-align: center;
      }

      .table-border-bottom {
        border-bottom: 1px solid;
      }

      .table-border-right {
        border-right: 1px solid;
      }

      .myBackground {
        padding-top: 10px;
        text-align: left;
        border: 1px solid black;
        height: 40px;
      }

      .myAlign {
        text-align: center;
        border-right: 1px solid black;
      }

      .myTotalBackground {
        padding-top: 10px;
        text-align: left;
        background-color: #EBF1DE;
        border-spacing: 0px;
      }

      .align-4 {
        width: 25%;
        float: left;
      }

      .tail {
        margin-top: 35px;
      }

      .align-2 {
        margin-top: 25px;
        width: 50%;
        float: left;
      }

      .border-center {
        text-align: center;
      }
      .border-center th, .border-center td {
        border: 1px solid black;
      }

      th, td {
        padding-left: 6px;
      }
}
    </style>
</head>

<body>

    <div class="salary-slip" >
        <table class="empDetail">
          <tr height="100px" style='background-color: #c2d69b'>
            <td colspan='4'>
              <img height="90px" src='https://organisationmedia.toggleflow.com/demo/logo.png' /></td>
            <td colspan='4' class="companyName"> ห้างหุ้นส่วนจำกัด ขอนแก่นโลจิสติกส์</td>
          </tr>
          <tr>
            <th>
              รหัสพนักงาน
  </th>
            <td>
                2409900020099
  </td>
            <td>

            </td>
            <th>
                ชื่อ-นามสกุล
  </th>
            <td>
             ปปปปปปปปปปปปป
  </td>
            <td>

            </td>


          </tr>


          <tr>
            <th>
                บัตร ปชช
  </th>
            <td>
                2409900020099
  </td>
            <td>

            </td>
            <th>
                ธนาคาร
            </th>
            <td>
                กสิกร
             </td>
            <td>

            </td>
          </tr>
          <tr class="myBackground">
            <th colspan="2">
              รายได้
  </th>
            <th >

  </th>
            <th class="table-border-right">
             จำนวนเงิน
  </th>
            <th colspan="2">
              รายการหัก
  </th>
            <th >

  </th>
            <th >
              จำนวนเงิน
  </th>
          </tr>
          <tr>
            <th colspan="2">
             เงินเดือน
  </th>
            <td></td>
            <td class="myAlign">
               {{$base_salary}}
  </td>
            <th colspan="2" >
              ประกันสังคม
  </th >
            <td></td>

            <td class="myAlign">
              {{$sso}}
  </td>
          </tr >
          <tr>
            <th colspan="2">
              ค่าตำแหน่ง
  </th>
            <td></td>

            <td class="myAlign">
                {{$base_salary_position}}
  </td>
            <th colspan="2" >
              ขาด
  </th >
            <td></td>

            <td class="myAlign">
                {{$missing}}
  </td>
          </tr >
          <tr>
            <th colspan="2">
              เงินพิเศษ
  </th>
            <td></td>

            <td class="myAlign">
                {{$extra_money}}
  </td>
            <th colspan="2" >
              ลา
  </th >
            <td></td>

            <td class="myAlign">
                {{$leave}}
  </td>
          </tr >
          <tr>
            <th colspan="2">
              ทำงานวันหยุด
  </th>
            <td></td>
            <td class="myAlign">
                {{$ot}}
  </td>
            <th colspan="2" >
              มาสาย
  </th >
            <td></td>
            <td class="myAlign">
                {{$late}}
  </td>
          </tr >
          <tr>
            <th colspan="2">
              ค่าคอม
  </th>
            <td></td>

            <td class="myAlign">
                {{$com}}
  </td>
            <th colspan="2" >
              เบิกล่วงหน้า
  </th >
            <td></td>

            <td class="myAlign">
                {{$advance}}
  </td>
          </tr >
          <tr>
            <th colspan="2">
              ค่าน้ำมัน
  </th> <td></td>
            <td class="myAlign">
                {{$oil}}
  </td>
            <th colspan="2" >
              ค่าปรับ
  </th >
            <td></td>
            <td class="myAlign">
                {{$fine}}
  </td>
          </tr >





          <tr class="myBackground">
            <th colspan="3">
            รายได้
  </th>
            <td class="myAlign">
              {{$base_month}}
  </td>
            <th colspan="3" >
            รายการหัก
  </th >
            <td class="myAlign">
              {{$total_deduction}}
  </td>
          </tr >


          <tbody class="border-center">



            <tr>
                <td colspan="4"></td>
                <td> ---------- วันที่จ่าย ---------- </td>
                <td colspan="4">{{$day_slip}}</td>

              </tr >
            <tr>
              <td colspan="4"></td>
              <td > ---------- รายได้สุทธิ ---------- </td>
              <td colspan="4">{{$total_money}}.00</td>

            </tr >
          </tbody>
        </table >

      </div >
</body>

</html>


