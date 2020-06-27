$(document).ready(function () {
    $('#inputProvince').change(function () {
        var wilID = $(this).val();
        if (wilID) {
            $.ajax({
                type: "GET",
                url: "/get-city",
                data: {
                    wil_id: wilID
                },
                success: function (res) {
                    if (res) {
                        $('#inputDistrict').empty();
                        $('#inputCity').empty();
                        $("#inputCity").append('<option value="" hidden>City</option>');
                        $("#inputDistrict").append('<option value="" hidden>Sub District</option>');
                        $.each(res, function (key, value) {
                            $("#inputCity").append('<option value="' + key + '">' + value + '</option>');
                        });

                    } else {
                        $('#inputDistrict').empty();
                        $("#inputCity").empty();
                    }
                }
            });
            $.ajax({
                type: "GET",
                url: "/province",
                data: {
                    wil_id: wilID
                },
                success: function (res) {
                    if (res) {
                        $('#getProvince').empty();
                        $.each(res, function (key, value) {
                            $('#getProvince').val(value);
                        });

                    } else {
                        $("#getProvince").empty();
                    }
                }
            });
        } else {
            $('#inputDistrict').empty();
            $("#inputCity").empty();
        }
    });
    $('#inputCity').change(function () {
        var wilID = $(this).val();
        if (wilID) {
            $.ajax({
                type: "GET",
                url: "/get-district",
                data: {
                    wil_id: wilID
                },
                success: function (res) {
                    if (res) {
                        $('#inputDistrict').empty();
                        $("#inputDistrict").append('<option value="" hidden>Sub District</option>');
                        $.each(res, function (key, value) {
                            $("#inputDistrict").append('<option value="' + key + '">' + value + '</option>');
                        });
                    } else {
                        $("#inputDistrict").empty();
                    }
                }
            });
            $.ajax({
                type: "GET",
                url: "/city",
                data: {
                    wil_id: wilID
                },
                success: function (res) {
                    if (res) {
                        $('#getCity').empty();
                        $.each(res, function (key, value) {
                            $('#getCity').val(value);
                        });

                    } else {
                        $("#getCity").empty();
                    }
                }
            });
        } else {
            $("#inputDistrict").empty();
        }
    });
    $('#inputDistrict').change(function () {
        var wilID = $(this).val();
        if (wilID) {
            $.ajax({
                type: "GET",
                url: "/district",
                data: {
                    wil_id: wilID
                },
                success: function (res) {
                    if (res) {
                        $('#getDistrict').empty();
                        $.each(res, function (key, value) {
                            $('#getDistrict').val(value);
                        });

                    } else {
                        $("#getDistrict").empty();
                    }
                }
            });
        } else {
            $("#getDistrict").empty();
        }
    });
});

