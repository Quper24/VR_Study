function getCountNumber(start, end) {
    let res = 0;
    if (typeof(start) == "string" || typeof(end) == "string" || isNaN(start) || isNaN(end) || start >= end || start < 0 || start / (start ^ 0) != 1 || end / (end ^ 0) != 1) {
        return false;
    } else {
        let arr = [];
        for (let i = start; i < (end + 1); i++) {
            let b;
            b = +(i).toString(2)
            arr.push(b);
        }
        arr.forEach(function(element, index) {
            elemStr = element.toString()
            let crash = elemStr.split('');
            let sum = 0;
            for (let i = 0; i < crash.length; i++) {
                sum = sum + (parseInt(crash[i]))
            }
            if (sum == 2) {
                res++
            }
        });
    };
    if (res == 0) {
        return false
    } else {
        return res
    }
}

module.exports = {
    firstName: 'Maksim',
    secondName: 'Leskin',
    task: getCountNumber
}