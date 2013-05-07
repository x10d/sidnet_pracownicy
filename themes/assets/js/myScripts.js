function xValidateForm(formName) {
    $(formName).validate({
        messages: {
            email: {
                required: 'Pole nie może pozostać puste',
                email: 'Pole musi zawierać prawidłowy adres mailowy'
            },
            username: {
                required: 'Pole nie może pozostać puste'
            },
            password: {
                required: 'Pole nie może pozostać puste'
            },
            passwordchecker: {
                required: 'Pole nie może pozostać puste'
            },
            oldpassword: {
                required: 'Pole nie może pozostać puste'
            }
        }

    });
}

function scrollDownAjax() {
    if ( ! page ) {
        var page = 1;
    }
    var isLoading = false;
    $(window).scroll(function() {
        if (isLoading || workersDataLoaded) {
            return;
        }
        if ($(window).scrollTop()+document.body.clientHeight == $(document).height()) {
            isLoading = true;
            page = page + 1;
            $.ajax({
                url: "/sidnet_pracownicy/pracownicy/appendToLongList/?page="+page,
                beforeSend: function() {
                    $('#spinner').show();
                },

                success : function(json_content) {
                    var parsed = jQuery.parseJSON(json_content);

                    $('#spinner').hide();

                    if (!parsed.success) {
                        workersDataLoaded = true; // ustawienie na true, aby nie ladowac kolejnych odwolan ajaxem
                        return;
                    }

                    $.each(parsed.workers, function(key, value){;
                        $('#workerLongListPage')
                            .find('tbody:last')
                            .append('<tr>'
                                + '<td>' + value.id + '</td>'
                                + '<td>' + value.imie + '</td>'
                                + '<td>' + value.nazwisko + '</td>'
                                + '<td>' + value.stanowisko + '</td>'
                                + '<td>' + value.pesel + '</td>'
                                + '</tr>'
                        );
                    });
                    isLoading = false;
                },
                error: function(err) {
                    return; // no items to display
                }
            });
        }
    });
};

function autosuggestSearchWorkers(searchString) {
    $.ajax({
        url: "/sidnet_pracownicy/pracownicy/returnAutosuggestSearchWorkers/?searchString="+searchString,
        
        success : function(json_content) {
            var parsed = jQuery.parseJSON(json_content);
            var names = new Array();
            console.log(names);
            $.each(parsed, function(key, value){;
console.log(value);
                names.push(value);
            });
            $('#searchString').typeahead({source: names});
        },
        error: function(err) {
            return; // no items to display
        }
    });
}

$(document).ready(function(){
    $(".fb").click(function(){
        utils.FBLogin('/sidnet_pracownicy/facebook');
        return false;
    });

    $(".gp").click(function(){
        utils.GPLogin(false, '/sidnet_pracownicy/googleplus');
        return false;
    });
});
