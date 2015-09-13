<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>{{ Lang::get('error.email.title') }}</title>
</head>

{{-- Styles to avoid unexpected spaces--}}
<body style="margin: 0; padding: 0;">

{{-- Cellpadding and cellspacing to zero. So avoid unexpected spaces --}}
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td>
            <h1 style="color:red">{{ Lang::get('error.email.title') }}</h1>
        </td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td>Code:</td>
                    <td>{{ $exception->getCode() }}</td>
                </tr>
                <tr>
                    <td>File:</td>
                    <td>{{ $exception->getFile() }}</td>
                </tr>
                <tr>
                    <td>Line:</td>
                    <td>{{ $exception->getLine() }}</td>
                </tr>
                <tr>
                    <td>Message:</td>
                    <td>{{ $exception->getMessage() }}</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>