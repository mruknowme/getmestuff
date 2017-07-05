<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('admin/select2-bootstrap.css') }}" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


</head>

<body>
    <select name="users" id="users" class="form-control" style="width: 500px" multiple="multiple"></select>
    <script>
        $(document).ready(function(){
            $('#users').select2({
                theme: "bootstrap",
                ajax : {
                    url : '/admin/api/users/emails',
                    dataType : 'json',
                    delay : 200,
                    data : function(params){
                        return {
                            q : params.term,
                            page : params.page
                        };
                    },
                    processResults : function(data, params){
                        params.page = params.page || 1;
                        return {
                            results : data.data,
                            pagination: {
                                more : (params.page  * 10) < data.total
                            }
                        };
                    }
                },
                minimumInputLength : 1,
                templateResult : function (repo){
                    if(repo.loading) return repo.email;
                    return repo.email;
                },
                templateSelection : function(repo, d)
                {
                    return repo.email;
                },
                escapeMarkup : function(markup){ return markup; }
            }).trigger('change').on('change', function (event) {
                console.log($('#'+event.currentTarget.name).val());
            });
        });
    </script>
</body>
</html>
