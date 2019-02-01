function loginForm_submit() {
  $('#waitingBody').show();

  endPoint = '/credentials';
  params = $('#loginForm').serialize()

  $.ajax({
    url: endPoint,
    type: "POST",
    data: params,
    dataType: "json",
    cache: false,
  }).done(function (data) {
    $('#waitingBody').hide();
    if (data == 'true') {
      document.location = '/';
    } else {
      alert("System was not able to validate with these credentials.");
    }


  });
  return false;
}


function getNoteList() {
  $('#waitingBody').show();
  endPoint = '/notes';
  $.ajax({
    url: endPoint,
    cache: false,
  }).done(function (data) {
    $('#waitingBody').hide();
    $('#noteList').html(data);
  });
}

function loadNoteForm(id) {
  $('#waitingBody').show();
  endPoint = '/note/form/' + id;
  $.ajax({
    url: endPoint,
    cache: false,
  }).done(function (data) {
    $('#waitingBody').hide();
    $('#myModalBody').html(data);
    $('.select2').select2();
  });
}

function addNote_click() {
  editNote_click(0);
}

function editNote_click(id) {
  modalForm("Note Form", 'noteForm', true);
  loadNoteForm(id);
}

function myModalForm_submit() {
  switch ($('#myModalFormId').val()) {
    case "noteForm":
      noteForm_submit()
      break;
  }
  return false;
}

async function noteForm_submit() {
  errs = [];
  if ($('#noteFormCategory').val() == '') {
    errs.push("Please select a category.");
  }
  if ($('#noteFormTitle').val() == '') {
    errs.push("Please enter a title.");
  }
  if (errs.length > 0) {
    alert(errs.join("\n\n"));
  } else {
    $('#waitingBody').show();

    endPoint = '/note/form';
    params = $('#myModalForm').serialize()

    $.ajax({
      url: endPoint,
      type: "POST",
      data: params,
      cache: false,
    }).done(function (data) {
      $('#waitingBody').hide();
      closeModalFrom();
      alert(data);
      getNoteList();
    });
  }

}

function closeModalFrom() {
  $('#myModal').modal('hide');
}

function modalForm(title, myModalFormId, showButtons) {
  $('#myModal').modal();
  $('#myModalFormTitle').html(title);
  if (showButtons) {
    $('#myModalFormButtons').show();
  } else {
    $('#myModalFormButtons').hide();
  }
  $('#myModalFormId').val(myModalFormId);
}

function expandCollapse(className) {
  if ($('.' + className).is(":visible")) {
    $('.' + className).hide(255);
  } else {
    $('.' + className).show(255);
  }
}
