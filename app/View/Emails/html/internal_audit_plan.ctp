<?php echo $message = "
<html>
    <head>
        <style>
            body {
                font-family: Arial;
                font-size: 13px;
                padding: 20px 10px;
                width: 780px;
                line-height: 20px;
                background: #cdcdcd;
            }
            label{ }
        </style>
    </head>
    <body>
        <div style=\"background:#555555 ; margin:0px; float:left; padding:5px 20px; border-bottom:1px dashed #FFFFFF; width:820px;\"> <a href=\"https://www.flinkiso.com\" target=\"_blank\" style=\"padding:0px; margin:0px;\"><img src=\"http://www.flinkiso.com/FlinkISO-Logo.png\" style=\"box-shadow:0 0 0\"></a>
            <h1 style=\"float:right; color:#cccccc; margin-top:35px\"> Free Open Source QMS</h1>
        </div>
        <div style=\"background:#16AFDD;margin:0px; float:left; padding:5px 20px; border-bottom:1px dashed #FFFFFF; color:#fff; width:820px; text-shadow:0px 0px 1px #000000; line-height:19px\">
            <h2>Internal Audit Plan</h2>
        </div>
        <div style=\"background:#f9f9f9 url(http://www.flinkiso.com/images/white_texture.png) ;margin:0px; float:left; padding:5px 20px; color:#333333; width:820px\">

            <div style='border:1px solid #ccc'>
                <table>

                    <tr>
                        <td style='padding:10px'>
                            <table style='width:100%; padding:2px'>

                                <tr><td>".__('Internal Audit Plan')."</td>
                                    <td> : ".$internalAuditPlan['InternalAuditPlan']['title']."
                                        &nbsp;
                                    </td></tr>
                                <tr><td>".__('Schedule Date From')."</td>
                                    <td> : ".$internalAuditPlan['InternalAuditPlan']['schedule_date_from']."
                                        &nbsp;
                                    </td></tr>

                                <tr><td>".__('Schedule Date To')."</td>
                                    <td> : ".$internalAuditPlan['InternalAuditPlan']['schedule_date_to']."
                                        &nbsp;
                                    </td></tr>

                                <tr><td>".__('Note')."</td>
                                    <td> : ".$internalAuditPlan['InternalAuditPlan']['note']."
                                        &nbsp;
                                    </td></tr>

                            </table>
                        </td>
                    </tr>

                </table>
            </div>

        </div>
        <div style=\"line-height:16px;background:#414243;margin:0 0 20px 0; float:left; padding:5px 20px; color:#fff; width:820px\">
            <span style=\"float:right\">Website : <a href=\"https://www.flinkiso.com\" style=\"color:#ffffff\" target=\"_blank\">www.flinkiso.com</a> <br />
                For Support : <a href=\"mailto:support@flinkiso.com\" style=\"color:#ffffff\">support@flinkiso.com</a> <br />
                copyrights &copy; 2014 </span> <span class=\"godaddy-img\" style=\"float: left; margin-top:6px; box-shadow:0 0 0 \"></span>
        </div>
    </body>
</html>";
?>
