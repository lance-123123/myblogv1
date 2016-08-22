$(function(){
    GetData();

    
    //删除博客类型
    $(".btn-del").on("click", function () {
        var ids = $(".tr-selected");
        if (ids.length == 0) {
            bootMessage("warning", "亲，请先选择要删除的数据~~~")
        } else {
            bootConfirm("亲，您是否要删除这条数据吗？", function () {
                var arr = [];
                $.each(ids, function (i, id) {
                    arr.push($(id).attr("data"));
                });
                deleteRow(arr.join(","));
            });
        }
    });

});


var resultDataTable = null;
var Id = "";
function GetData() {
    $(".loading-container").show();
    var $searchResult = $("#simpledatatable");

    if (resultDataTable) {
        resultDataTable.fnClearTable();
        $searchResult.dataTable().fnDestroy();
        $("#simpledatatable tbody").empty();
        $('ul.toggle-table-columns').empty();
    } else {
        $searchResult.show();
    }
    resultDataTable = $searchResult.dataTable({
        "sDom": "Tflt<'row DTTTFooter'<'col-sm-6'i><'col-sm-6'p>>",
        "iDisplayLength": 10,
        "bAutoWidth": false,
        "bStateSave": true,
        "sAjaxSource": $("#data").attr("value"),
        "language": {
            "sZeroRecords": "没有您要搜索的内容",
            "sInfo": "从 _START_ 到 _END_ 条记录，总记录数为 _TOTAL_ 条",
            "sInfoEmpty": "总记录数为 0 条",
            "sInfoFiltered": "(全部记录数 _MAX_  条)",
            "sSearch": "",
            "sLengthMenu": "_MENU_",
            "oPaginate": {
                "sPrevious": "上一页",
                "sNext": "下一页"
            }
        },
        "columns": [
            {"data": "title"},
            {"data":"userful_chat"},
            {"data":"message_time"},
            {"data":"province"},
            {"data":"city"},
            {"data":"message","bSortable": false},
            /*{"data": "status","bSortable": false},*/
            {"data": "id", "bSortable": false}
        ],
        "aaSorting": [
            [2, 'desc']
        ],
        "fnServerData": function (sSource, aoData, fnCallback) {
            aoData = {
               /* "status": $("#status").find("option:selected").val()*/
            };
            $.ajax({
                "type": 'post',
                "url": sSource,
                "dataType": "json",
                "data": {
                   /* aoData: aoData*/
                },
                "success": function (resp) {
                    fnCallback(resp);
                    $(".loading-container").hide();
                }
            });

        },
        "fnInitComplete": function () {
            $("input[type=search]").attr("placeholder", "全文筛选");
        },

        "fnRowCallback": function (nRow, aData, iDisplayIndex) {
            $(nRow).on("click", function () {
                if ($(this).hasClass("tr-selected")) {
                    $(this).removeClass("tr-selected");
                } else {
                    $(this).addClass("tr-selected");
                }
            });
            $(nRow).attr("data", aData.id);
            $(nRow).attr("id", "tr_" + aData.id);
            $(nRow).find("td:eq(5)").html("<a class='btn btn-success btn-xs' data='" + aData.message+"' onclick='change(this,event)'><i class='fa fa-search'></i> 查看 </a>");

            $(nRow).find("td:last").html("<a class='btn btn-danger btn-xs' data='" + aData.id + "' onclick='del(this,event)'><i class='glyphicon glyphicon-trash'></i> 删除 </a>");
            return nRow;
        }
    });
}

//改变类型管理的状态
function change(e, event) {//由启用状态到禁用状态
    event = event || window.event;
    if (event.stopPropagation) {
        event.stopPropagation();
    } else {
        event.cancelBubble = true;
    }
    var data = $(e).attr("data");
    bootMessage("success",data);
}


function change_close(id, status) {
    $.post($("#changes").attr("value"), {id: id, status: status}, function (d) {
        if (d== 1) { //开启数据成功
            bootMessage("success","操作成功！");
                window.location.reload();
        } else if (d== 2) {
            bootMessage("danger","操作失败！");
        }
    }, "json");
}


function del(e, event) {
    event = event || window.event;
    if (event.stopPropagation) {
        event.stopPropagation();
    } else {
        event.cancelBubble = true;
    }
    var id = $(e).attr("data");
    bootConfirm("亲，您是否要删除这条数据？", function () {
        deleteRow(id);
    });
}

function deleteRow(ids) {
    $.post($(".btn-del").attr("data"), {id: ids}, function (data) {
        if (data == 0) {
            bootMessage("success", "亲！博客删除成功！");
            window.location.reload();
        } else {
            bootMessage("danger", "亲！博客删除失败！");
        }
    }, "json");
}


function eidt(e, event) {
    event = event || window.event;
    if (event.stopPropagation) {
        event.stopPropagation();
    } else {
        event.cancelBubble = true;
    }
    window.location.href = $(".btn-edit").attr("data") + "?id=" + $(e).attr("data");
}
