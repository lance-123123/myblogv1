$(function(){
    GetData();

    $(".btn-add").on("click", function () {
        window.location.href = $(this).attr("data");
    });

    $(".btn-edit").on("click", function () {
        var id = $(".tr-selected").attr("data");
        if (id === undefined) {
            bootMessage("warning", "亲，请先选择要编辑的数据~~~")
        } else {
            window.location.href = $(this).attr("data") + "?id=" + id;
        }
    });


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
            {"data": "tags"},
            {"data": "browsenumber"},
            {"data":"praise"},
            {"data":"update_time"},
            {"data": "status","bSortable": false},
            {"data": "id", "bSortable": false}
        ],
        "aaSorting": [
            [0, 'desc']
        ],
        "fnServerData": function (sSource, aoData, fnCallback) {
            aoData = {
                "status": $("#status").find("option:selected").val()
            };
            $.ajax({
                "type": 'post',
                "url": sSource,
                "dataType": "json",
                "data": {
                    aoData: aoData
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
            if (aData.status == 1) {
                $(nRow).find("td:eq(5)").html("<a class='btn btn-danger btn-xs' data='" + aData.id + "," + aData.status + "' onclick='change(this,event)'><i class='glyphicon glyphicon-remove'></i> 禁用 </a>");
            } else if (aData.status == 0) {
                $(nRow).find("td:eq(5)").html("<a class='btn btn-info btn-xs' data='" + aData.id + "," + aData.status + "' onclick='change(this,event)'><i class='glyphicon glyphicon-ok'></i> 启用 </a>");

            }
            $(nRow).find("td:last").html("<a class='btn btn-primary btn-xs' data='" + aData.id + "' onclick='eidt(this,event)'><i class='glyphicon glyphicon-pencil'></i> 编辑 </a>&nbsp;<a class='btn btn-danger btn-xs' data='" + aData.Id + "' onclick='del(this,event)'><i class='glyphicon glyphicon-trash'></i> 删除 </a>");
            return nRow;
        }
    });
}

function change(e, event) {//由启用状态到禁用状态
    event = event || window.event;
    if (event.stopPropagation) {
        event.stopPropagation();
    } else {
        event.cancelBubble = true;
    }
    var data = $(e).attr("data").split(",");
    var nums = [];
    for (var i = 0; i < data.length; i++) {
        nums.push(parseInt(data[i]));
    }
    var id = nums[0];
    var status = nums[1];
    if (status == 0) {
        bootConfirm("亲，您确定要禁用这条博客吗？", function () {
            change_close(id, status);
        });
    } else if (status == 1) {
        bootConfirm("亲，您确定要启用这条博客吗？", function () {
            change_close(id, status);
        });
    }

}

function change_close(id, status) {
    $.post($("#change").attr("value"), {id: id, status: status}, function (d) {
        if (d== 1) { //开启数据成功
            bootMessage("success","操作成功！");
                window.location.reload();
        } else if (d== 2) {
            bootMessage("danger","操作失败！");
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
    $.post($(".btn-del").attr("data"), {id: ids}, function (d) {
        if (d.code == 0) {
            if (ids.split(",").length > 1) {
                bootMessage("success", d.message);
            } else {
                bootMessage("success", d.message);
            }
            window.location.reload();
        } else {
            bootMessage("danger", d.message);
        }
    }, "json");
}