@if( isset($data) )

    <style>

        .m-datatable__pager-info{
            display: none !important;
        }
        .m-datatable__pager-link--active{
            background-color: white !important;
            color: black !important;
        }
        .m-datatable__pager-link-number:hover{
            background-color: gray !important;
            color: white !important;
        }
        .m-datatable__pager-link--next:hover{
            background-color: gray !important;
            color: white !important;
        }
        .m-datatable__pager-link--last:hover{
            background-color: gray !important;
            color: white !important;
        }
        .m-datatable__pager-link--prev:hover{
            background-color: gray !important;
            color: white !important;
        }
        .m-datatable__pager-link--first:hover{
            background-color: gray !important;
            color: white !important;
        }

    </style>

    <table class = "m-datatable" id = "html_table" width = "100%">
        <thead>
            <tr>
                <th title = "Field #1">Test</th>
                <th title = "Field #1">Test</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['list'] as $item)
                <tr>
                    <td>
                        <img src = "http://openweathermap.org/img/w/{{ $item['weather'][0]['icon'] }}.png" alt = "">
                    </td>
                    <td>
                        {{  }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src = "{{ asset('metronic/assets/demo/default/custom/components/datatables/base/html-table.js') }}" type = "text/javascript"></script>

@endif