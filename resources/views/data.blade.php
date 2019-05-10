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
        <thead style = "text-align:center">
            <tr>
                <th title = "Field #1">Date</th>
                <th title = "Field #2">Time</th>
                <th title = "Field #3">Statuss</th>
                <th title = "Field #4">Temperature</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['list'] as $item)
                <tr>
                    <td>
                        <center>
                            {{ date("M d D", strtotime($item['dt_txt'])) }}
                        </center>
                    </td>
                    <td>
                        <center>
                            {{ date("g:m a", strtotime($item['dt_txt'])) }}
                        </center>
                    </td>
                    <td>
                        {{ $item['weather'][0]['description'] }} <img src = "http://openweathermap.org/img/w/{{ $item['weather'][0]['icon'] }}.png" width = "25" alt = "{{ $item['weather'][0]['description'] }}">
                    </td>
                    <td>
                        <center>
                        <span class="m-badge m-badge--danger m-badge--wide">{{ round((($item['main']['temp'] * 9/5 - 459.67) - 32) * 0.5556, 0) }}&deg;C</span> <span class="m-badge m-badge--info m-badge--wide">{{ round(($item['main']['temp'] * 9/5 - 459.67), 0) }}&deg;F</span>
                        </center>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src = "{{ asset('metronic/assets/demo/default/custom/components/datatables/base/html-table.js') }}" type = "text/javascript"></script>

@endif