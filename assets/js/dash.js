$(document).ready(function() {
    var dt_dashboard_table = $('.dash');

    if (dt_dashboard_table.length) {
        var dt_dashboard = dt_dashboard_table.DataTable({
            ajax: 'assets/json/table-dash.php',
            columns: [
                { data: 'id' },
                { data: 'cnpj' },
                { data: 'nome' },
                { data: 'whatsapp' },
                { data: 'email' },
                { data: 'uf' },
                { 
                    data: 'status',
                    render: function(data, type, row) {
                        var alert_class = '';
                        var status_text = '';
                        if (data === 'Ativo') {
                            alert_class = 'alert-success'; // Alerta verde para status Ativo
                            status_text = 'Ativo';
                        } else if (data === 'Inativo') {
                            alert_class = 'alert-danger'; // Alerta vermelho para status Inativo
                            status_text = 'Inativo';
                        } else {
                            alert_class = 'alert-warning'; // Alerta amarelo para outros status
                            status_text = 'Bloqueado';
                        }
                        return '<div class="alert ' + alert_class + '">' + status_text + '</div>';
                    }
                }
            ]
        });
    }
});
