<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background-color:#000;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                color: #fff;
            }

            a {
                color: #fff;
                text-decoration: none;
            }

            a:hover {
                font-weight:bold;
            }

            p {
                color:white;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="content">
            <div class="title">
            </div>
        </div>
    </div>
        <div class="container">
            <div class="content">
                <div class="title">Example</div>
                @if (Auth::check())
                    <p>Hallo {{$user->name}}</p>
                    <p>Email kamu :  {{$user->email}}</p>
                    <p>Id kamu :  {{$user->saml_id}}</p>
                    <p>Role kamu : </p>
                    @foreach ($roles as $role)
                        <p>{{$role->name}}</p>
                    @endforeach
                @else
                <p>Hallo Guest!</p>
                <p>Silahkan login</p>
                @endif
                <p>
                    <a href="/example/rumpun-jabatan/query-rumpun">QueryRumpun</a><br />
                    <a href="/example/rumpun-jabatan/query-jabatan">QueryJabatan</a><br />
                    <a href="/example/pegawai/query-pegawai">QueryPegawai</a><br />
                    <a href="/example/pegawai/query-atasan/?nip=197808272007011003">QueryAtasan</a><br />
                    <a href="/example/pegawai/query-skpd">QuerySKPD</a><br />
                    <a href="/example/pegawai/query-pejabat-by-skpd/?id=2">QueryPejabatBySKPD</a><br>
                    @if (Auth::check())
                    <a href="/logout">Logout</a><br>
                    @else
                    <a href="/login">Login</a>
                    @endif
                </p>
            </div>
        </div>
    </body>
</html>
