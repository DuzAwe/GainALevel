$(document).ready(function() {
    console.log('script running');
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    $('#calendar').fullCalendar({
        header: {
            left: 'prev',
            center: 'title',
            right: 'next'
        },
        editable: true,
        events: [
        // some original fullCalendar examples
        {
            title: 'All Day Event',
            start: new Date(y, m, 1)
        }, {
            title: 'Long Event',
            start: new Date(y, m, d - 5),
            end: new Date(y, m, d - 2)
        }, {
            id: 999,
            title: 'Repeating Event',
            start: new Date(y, m, d - 3, 16, 0),
            allDay: false
        }]
    });
    // adding a every monday and wednesday events:
    $('#calendar').fullCalendar('addEventSource', function(start, end, callback) {
        // When requested, dynamically generate virtual
        // events for every monday and wednesday.
        var events = [];
        for (loop = start.getTime();
        loop <= end.getTime();
        loop = loop + (24 * 60 * 60 * 1000)) {
            var test_date = new Date(loop);
            if (test_date.is().monday()) {
                // we're in Moday, create the event
                events.push({
                    title: 'Workout',
                    start: test_date
                });
            }
            if (test_date.is().wednesday()) {
                // we're in Wednesday, create the Wednesday event
                events.push({
                    title: 'Workout',
                    start: test_date
                });
            }
            if (test_date.is().friday()) {
                // we're in Friday, create the Friday event
                events.push({
                    title: 'Workout',
                    start: test_date
                });
            }
        } // for loop
        // return events generated
        callback(events);
    });
});