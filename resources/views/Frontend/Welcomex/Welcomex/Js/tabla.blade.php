<script>
    $('.select2').select2();
    var table = '';
    $(document).ready(function() {
        let f_ajax = function() {
            let url = '{{ route($todoxxxx['permisox'] . '.activoxx') }}';
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'activoxx': $('#activo_id').val(),
                    'accesoxx': $('#acceso_id').val(),
                    'actorxxx': $('#actor_id').val(),
                    'motivoxx': $('#motivo_id').val(),
                    'vulnerab': $('#vulnerab_id').val(),
                    'actovuln': $('#actovuln_id').val(),
                    'herramie': $('#herramie_id').val(),


                },
                dataType: 'json',
                success: function(json) {
                    $('#cuerpoxx,#cuervuln').empty()

                    $.each(json.dataxxxx, function(i, d) {
                        let cuerpoxx = '';
                        cuerpoxx += "<tr>";
                        cuerpoxx += "<td>" + d.id + "</td>";
                        cuerpoxx += '<td>';
                        cuerpoxx += d.resultad ;
                        cuerpoxx += "</td>";
                        cuerpoxx += "<td>";
                        cuerpoxx +=
                            '<button type="button" id="' + d.id +
                            '" class="btn btn-primary modalxxx">';
                        cuerpoxx += d.impactox;
                        cuerpoxx += '</button>';
                        cuerpoxx += "</td>";
                        cuerpoxx += "<td>";
                        cuerpoxx +=
                            '<button type="button" id="' + d.id +
                            '" class="btn btn-primary probabil">';
                        cuerpoxx += d.probabil;
                        cuerpoxx += ' </button> ';
                        cuerpoxx += "</td>";

                        cuerpoxx += "<td>";
                        cuerpoxx +=  d.probimpa;
                        cuerpoxx += "</td>";

                        cuerpoxx += "<td>";
                        cuerpoxx +=  d.metodoxx;
                        cuerpoxx += "</td>";

                        cuerpoxx += "<td>";
                        cuerpoxx +=  d.probimpa;
                        cuerpoxx += "</td>";
                       
                        cuerpoxx += "</tr>";
                        $('#cuerpoxx').append(cuerpoxx)
                    });
                    $.each(json.vulnerab, function(i, d) {
                        let cuerpoxx = '';
                        cuerpoxx += "<tr>";
                        cuerpoxx += "<td>" + d.id + "</td>";
                        cuerpoxx += "<td>" + d.herramie + "</td>";
                        cuerpoxx += "</tr>";
                        $('#cuervuln').append(cuerpoxx)
                    });

                    $(json.emptyxxx).empty()

                    $.each(json.combosxx, function(i, c) {
                        $.each(c.comboxxx, function(i, co) {
                            $(c.idxxxxxx).append('<option ' + co.selected +
                                ' value="' + co.valuexxx + '">' + co
                                .optionxx + '</option>')
                        });
                    });

                },
                error: function(xhr, status) {
                    console.log(xhr.responseJSON.message);
                    alert('Disculpe, se presentó el siguiente error: ' + xhr.responseJSON
                        .message);
                }
            });
        }
        f_ajax();
        $('.select2').change(function() {
            f_ajax();
        });


        let f_impactos = function(id) {
            let url = "{{ route($todoxxxx['permisox'] . '.impactos') }}";
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "motiresu": id,
                },
                dataType: 'json',
                success: function(json) {
                    $('#impactos').empty()
                    $.each(json.dataxxxx, function(i, d) {
                        let cuerpoxx = '';
                        cuerpoxx += "<tr>";
                        cuerpoxx += "<td>" + d.id + "</td>";
                        cuerpoxx += '<td>';
                        cuerpoxx += d.impacto + "</td>";
                        cuerpoxx += "<td>";
                            cuerpoxx += d.nivel ;
                        cuerpoxx += "</td>";
                        cuerpoxx += "<td>";
                            cuerpoxx += d.impanive ;
                        cuerpoxx += "</td>";
                        cuerpoxx += "</tr>";
                        $('#impactos').append(cuerpoxx)
                    });
                },
                error: function(xhr, status) {
                    console.log(xhr.responseJSON.message);
                    alert('Disculpe, se presentó el siguiente error: ' + xhr.responseJSON
                        .message);
                }
            });
        }

        $("#cuerpoxx").on('click', '.modalxxx', function() {
            f_impactos($(this).prop('id'));
            $("#modal-primary").modal();
        });

        let f_probabils = function(id) {
            let url = "{{ route($todoxxxx['permisox'] . '.probabil') }}";
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "motiresu": id,
                },
                dataType: 'json',
                success: function(json) {
                    $('#probabil').empty()
                    $.each(json.dataxxxx, function(i, d) {
                        let cuerpoxx = '';
                        cuerpoxx += "<tr>";
                        cuerpoxx += "<td>" + d.id + "</td>";
                        cuerpoxx += '<td>';
                        cuerpoxx += d.tipoprob + "</td>";
                        cuerpoxx += "<td>";
                            cuerpoxx += d.nivel ;
                        cuerpoxx += "</td>";
                        cuerpoxx += "<td>";
                            cuerpoxx += d.probabil ;
                        cuerpoxx += "</td>";
                        cuerpoxx += "</tr>";
                        $('#probabil').append(cuerpoxx)
                    });
                },
                error: function(xhr, status) {
                    console.log(xhr.responseJSON.message);
                    alert('Disculpe, se presentó el siguiente error: ' + xhr.responseJSON
                        .message);
                }
            });
        }
        $("#cuerpoxx").on('click', '.probabil', function() {
            f_probabils($(this).prop('id'));
            $("#modal-probabil").modal();
        });
    });
</script>
