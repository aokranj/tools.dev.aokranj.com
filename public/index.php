<h3>tools.dev.aokranj.com</h3>

<table border="1px" style="border-collapse: collapse;">
    <tr>
        <td colspan="3"><b>DB:</b></td>
    </tr>
    <tr>
        <td>phpMyAdmin</td>
        <td><a href="/pma/?server=2">old (current) server</a></td>
        <td><a href="/pma/?server=1">new (upcoming) server (mariadb)</a></td>
    </tr>

    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>

    <tr>
        <td colspan="3"><b>HTTPD/PHP:</b></td>
    </tr>
    <tr>
        <td>Apache: server-info</td>
        <td><a href="get-app-runtime-data.php?type=apache&subtype=info&env=devstg">devstg</a></td>
        <td><a href="get-app-runtime-data.php?type=apache&subtype=info&env=prod">prod</a></td>
    </tr>
    <tr>
        <td>Apache: server-status</td>
        <td><a href="get-app-runtime-data.php?type=apache&subtype=status&env=devstg">devstg</a></td>
        <td><a href="get-app-runtime-data.php?type=apache&subtype=status&env=prod">prod</a></td>
    </tr>
    <tr>
        <td>PHP: phpinfo()</td>
        <td><a href="get-app-runtime-data.php?type=php&subtype=info&env=devstg">devstg</a></td>
        <td><a href="get-app-runtime-data.php?type=php&subtype=info&env=prod">prod</a></td>
    </tr>
    <tr>
        <td>PHP: OPcache status</td>
        <td><a href="get-app-runtime-data.php?type=php&subtype=opcache&env=devstg">devstg</a></td>
        <td><a href="get-app-runtime-data.php?type=php&subtype=opcache&env=prod">prod</a></td>
    </tr>
</table>
