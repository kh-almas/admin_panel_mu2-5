$(function(){

    let datePicker = document.getElementById('datePicker');
    let picker = new Lightpick({
        field: datePicker,
        onSelect: function(date){
            datePicker.value = date.format('YYYY-MM-DD');
        }
    });

    let dateRangePicker = document.getElementById('dateRangePicker');
    let pickerRange = new Lightpick({
        field: dateRangePicker,
        singleDate: false,
        onSelect: function(start, end){
            let str = '';
            str += start ? start.format('Do MMMM YYYY') + ' to ' : '';
            str += end ? end.format('Do MMMM YYYY') : '...';
            dateRangePicker.value = str;
        }
    });


    //Date

    //<div className="form-group">
    //    <div className="input-group mb-4">
    //        <div className="input-group-prepend"><span className="input-group-text">Date</span></div>
    //        <input className="form-control" type="text" id="datePicker">
    //    </div>
    //</div>

    // Date Range

    //<div className="form-group">
    //    <div className="input-group input-daterange">
    //        <div className="input-group-prepend"><span className="input-group-text">Date Range</span></div>
    //        <input className="form-control" type="text" id="dateRangePicker">
    //    </div>
    //</div>
});
