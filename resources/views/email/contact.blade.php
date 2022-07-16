<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Mail</title>
    <style>
        p {
            margin: 0 0 8px 0;
        }
        table.inner-table {
            border: 1px solid #000000;
            width: 100%;
            border-collapse: collapse;
        }
        table.inner-table td {
            padding: 10px;
            border: 1px solid #000000;
            vertical-align: top;
        }
    </style>
</head>
<body>
    <center style="background: #ececec;padding: 30px 0;">
        <table style="background: #fff;width: 600px;margin: 0 auto;overflow: hidden;padding: 0;border-collapse: collapse;">
            <tr>
                <td style="background: #000000;font-size:18px;color: #fff !important;padding: 15px 0;">
                    <center style="font-weight:bold;color: #fff;">Mail from SS-SURVEYORS Contact form</center>
                </td>
            </tr>
            <tr>
                <td style="padding: 0;">
                    <table class="inner-table">
                        <tbody>
                            <tr>
                                <td style="width:30%;"><b>First Name :</b></td>
                                <td>{{ $name}}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:30%;"><b>Email :</b></td>
                                <td>{{ $email}}</td>
                            </tr>
                            <tr>
                                <td style="width:30%;"><b>Last Name :</b></td>
                                <td>{{ $subject }}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:30%;"><b>Message :</b></td>
                                <td>{{ $msg }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>