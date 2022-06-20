<!DOCTYPE html>
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>新規登録画面</title>
</head>
<body>
    <form action="{{ route('signUp')}}" method="post">
        @csrf
    <h1>
        新規登録フォーム
    </h1>
    <div>
        <table>
            <tr>
                <td>
                    <h2>
                        名前：
                    </h2>
                </td>
                <td>
                    <input type="text" name="name" placeholder="名前">
                </td>
            </tr>

            <tr>
                <td>
                    <h2>
                        Eメール：
                    </h2>
                </td>
                <td>
                    <input type="text" name="email" placeholder="eメール">
                </td>
            </tr>

            <tr>
                <td>
                    <h2>
                        住所：
                    </h2>
                </td>
                <td>
                    <input type="text" name="address" placeholder="住所">
                </td>

                <tr>
                    <input type="submit" value="登録">
                </tr>
        </table>
    </div>
    </form>
</body>