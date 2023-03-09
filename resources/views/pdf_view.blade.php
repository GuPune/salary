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
              ชื่อ
  </th>
            <td>
              Test Test
  </td>
            <td>

            </td>
            <th>
              Bank Code
  </th>
            <td>
              ABC123
  </td>
            <td>

            </td>
            <th>
              Branch
  </th>
            <td>
              ABC123
  </td>
          </tr>




          <tr class="myBackground">
            <th colspan="2">
              Payments
  </th>
            <th >
              Particular
  </th>
            <th class="table-border-right">
              Amount (Rs.)
  </th>
            <th colspan="2">
              Deductions
  </th>
            <th >
              Particular
  </th>
            <th >
              Amount (Rs.)
  </th>
          </tr>
          <tr>
            <th colspan="2">
              Basic Salary
  </th>
            <td></td>
            <td class="myAlign">
              4935.00
  </td>
            <th colspan="2" >
              Provident Fund
  </th >
            <td></td>

            <td class="myAlign">
              00.00
  </td>
          </tr >
          <tr>
            <th colspan="2">
              Fixed Dearness Allowance
  </th>
            <td></td>

            <td class="myAlign">
              00.00
  </td>
            <th colspan="2" >
              LIC
  </th >
            <td></td>

            <td class="myAlign">
              00.00
  </td>
          </tr >
          <tr>
            <th colspan="2">
              Variable Dearness Allowance
  </th>
            <td></td>

            <td class="myAlign">
              00.00
  </td>
            <th colspan="2" >
              Loan
  </th >
            <td></td>

            <td class="myAlign">
              00.00
  </td>
          </tr >
          <tr>
            <th colspan="2">
              House Rent Allowance
  </th>
            <td></td>
            <td class="myAlign">
              00.00
  </td>
            <th colspan="2" >
              Professional Tax
  </th >
            <td></td>
            <td class="myAlign">
              00.00
  </td>
          </tr >
          <tr>
            <th colspan="2">
              Graduation Allowance
  </th>
            <td></td>

            <td class="myAlign">
              00.00
  </td>
            <th colspan="2" >
              Security Deposite(SD)
  </th >
            <td></td>

            <td class="myAlign">
              00.00
  </td>
          </tr >
          <tr>
            <th colspan="2">
              Conveyance Allowance
  </th> <td></td>
            <td class="myAlign">
              00.00
  </td>
            <th colspan="2" >
              Staff Benefit(SB)
  </th >
            <td></td>
            <td class="myAlign">
              00.00
  </td>
          </tr >
          <tr>
            <th colspan="2">
              Post Allowance
  </th>
            <td></td>
            <td class="myAlign">
              00.00
  </td>
            <th colspan="2" >
              Labour Welfare Fund
  </th >
            <td></td>
            <td class="myAlign">
              00.00
  </td>
          </tr >
          <tr>
            <th colspan="2">
              Special Allowance
  </th>
            <td></td>
            <td class="myAlign">
              00.00
  </td>
            <th colspan="2" >
              NSC
  </th >
            <td></td>
            <td class="myAlign">
              00.00
  </td>
          </tr >
          <tr>
            <td colspan="4" class="table-border-right"></td>
            <th colspan="2" >
              Union Thanco Officer(UTO)
  </th >
            <td></td>
            <td class="myAlign">
              00.00
  </td>
          </tr >
          <tr>
            <td colspan="4" class="table-border-right"></td>
            <th colspan="2" >
              Advance
  </th >
            <td></td>
            <td class="myAlign">
              00.00
  </td>
          </tr >
          <tr>
            <td colspan="4" class="table-border-right"></td>
            <th colspan="2" >
              Income Tax
  </th > <td></td>
            <td class="myAlign">
              00.00
  </td>
          </tr >
          <tr class="myBackground">
            <th colspan="3">
              Total Payments
  </th>
            <td class="myAlign">
              10000
  </td>
            <th colspan="3" >
              Total Deductions
  </th >
            <td class="myAlign">
              1000
  </td>
          </tr >
          <tr height="40px">
            <th colspan="2">
              Projection for Financial Year:
            </th>
            <th>
            </th>
            <td class="table-border-right">
            </td>
            <th colspan="2" class="table-border-bottom" >
              Net Salary
            </th >
            <td >
            </td>
            <td >
              XXXXXXXXXX
            </td>
          </tr >
          <tr>
            <td colspan="2">
              Gross Salary
            </td> <td></td>
            <td class="myAlign">
              00.00
  </td><td colspan="4"></td>
          </tr >
          <tr>
            <td colspan="2">
              Aggr. Dedu - P.Tax & Std Ded
  </td> <td></td>
            <td class="myAlign">
              00.00
  </td>
            <th colspan="2" >
              Cumulative
  </th >
            <td colspan="2"></td>
          </tr >
          <tr>
            <td colspan="2">
              Gross Total Income
  </td> <td></td>
            <td class="myAlign">
              00.00
  </td>
            <td colspan="2" >
              Empl PF Contribution
  </td > <td></td>
            <td class="myAlign">
              00.00
  </td>
          </tr >
          <tr>
            <td colspan="2">
              Aggr of Chapter "PF"
  </td> <td></td>
            <td class="myAlign">
              00.00
  </td><td colspan="4"></td>
          </tr >
          <tr>
            <td colspan="2">
              Total Income
  </td> <td></td>
            <td class="myAlign">
              00.00
  </td>
            <td colspan="4"></td>
          </tr >
          <tbody class="border-center">
            <tr>
              <th>
                Attend/ Absence
  </th>
              <th>
                Days in Month
  </th>
              <th>
                Days Paid
  </th>
              <th>
                Days Not Paid
  </th>
              <th>
                Leave Position
  </th>
              <th>
                Privilege Leave
  </th>
              <th>
                Sick Leave
  </th>
              <th>
                Casual Leave
  </th>
            </tr>
            <tr>
              <td ></td>
              <td ></td>
              <td ></td>
              <td ></td>
              <td>Yrly Open Balance</td>
              <td>0.0</td> <td>0.0</td>
              <td>0.0</td>
            </tr >
            <tr>
              <th >Current Month</th>
              <td >31.0</td>
              <td >31.0</td>
              <td >31.0</td>
              <td>Availed</td>
              <td>0.0</td> <td>0.0</td>
              <td>0.0</td>
            </tr >
            <tr>
              <td colspan="4"></td>
              <td>Closing Balance</td>
              <td>0.0</td> <td>0.0</td>
              <td>0.0</td>
            </tr >
            <tr>
              <td colspan="4"> &nbsp; </td>
              <td > </td>
              <td > </td>
              <td > </td>
              <td > </td>
            </tr >
            <tr>
              <td colspan="4"></td>
              <td>Company Pool Leave Balance</td>
              <td>1500</td>
              <td ></td>
              <td ></td>
            </tr >
          </tbody>
        </table >

      </div >
</body>

</html>


