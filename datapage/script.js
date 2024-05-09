

let times = [
    // April 18, 17:00
    [1, 2, 3, 4, 5, 4, 3, 2, 3, 4, 5, 6, 5, 6, 5, 6, 7, 8, 9, 10, 11, 12, 11, 10, 11, 10, 9, 10, 11, 10, 9, 10, 9, 8, 7, 6, 5, 6, 7, 6, 7, 6, 5, 6, 7, 8, 7, 8, 9, 8, 9, 8, 9, 8, 7, 8, 9, 8, 9, 10, 11, 12, 13, 14, 13, 12, 11, 10, 11, 12, 13, 12, 11, 12, 13, 12, 13, 12, 11, 10, 9],
    // April 18, 18:00
    [10, 11, 12, 13, 14, 15, 16, 15, 16, 17, 18, 17, 18, 17, 18, 19, 20, 19, 20, 19, 20, 21, 22, 23, 24, 23, 22, 23, 24, 23, 24, 25, 26, 25, 24, 25, 24, 25, 24, 23, 24, 23, 22, 21, 22, 23, 24, 25, 24, 25, 26, 27, 28, 29, 28],
    // April 18, 19:00
    [27, 28, 29, 30, 31, 30, 31, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 39, 40, 41, 42, 43, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 61, 62, 61, 60, 59, 60, 61, 60, 61, 62, 63, 64, 65, 66, 65, 66, 67],
    // April 19, 16:00
    [1, 2, 3, 4, 3, 2, 3, 2, 1, 2, 3, 2, 3, 4, 5, 6, 7, 8, 7, 8, 9, 10, 11, 12, 13, 12, 11, 12, 11, 10, 11, 10, 9, 8, 7, 8, 9, 10, 11, 12, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 24, 23, 24, 25, 24, 25, 24, 25, 24, 23, 22, 23, 24, 23, 24, 25, 26, 27, 26, 27, 28, 27, 26, 27, 26, 25, 26, 25, 26, 27, 26, 25],
    // April 19, 17:00
    [24, 23, 22, 23, 22, 21, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 28, 29, 28, 27, 28, 29, 30, 31, 30, 31, 32, 33, 32, 33, 34, 33, 34, 33, 34, 35, 36, 37, 36, 37, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 49, 48, 47, 46, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 54, 55, 56, 55, 56, 57, 58, 59, 58, 57, 58, 59, 60, 59, 60, 61, 62, 61, 62, 63, 62, 63, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 71, 72],
    // April 19, 18:00
    [73, 72, 73, 74, 73, 74, 75, 74, 75, 74, 75, 76, 77, 78, 79, 78, 79, 80, 81, 80, 81, 82, 83, 84, 85, 86]
 ];

let samples = [6, 17, 33, 10, 24, 86];

function timeRange(){
    let time1 = document.getElementById('time1').value;
    let time2 = document.getElementById('time2').value;
    
    // The x multidimensional array's range is specified by the user
    let x = times.slice(time1, time2);

    // Takes the x multidimensional array and flattens it
    let valueRange = [].concat.apply([], x);

    meanCalculator(valueRange);
    medianCalculator(valueRange);
    modeCalculator(valueRange);
    varianceCalculator(valueRange);
    meanDevCalculator(valueRange);
    stanDevCalculator(valueRange);
    zscoreCalculator(valueRange, time1);
}

function meanCalculator(valueRange){
    let meanValue = 0;
    
    let total = 0;
    for(var i = 0; i < valueRange.length; i++) {
        total += valueRange[i];
    }

    meanValue = total / valueRange.length;

    document.getElementById("meanValue").innerHTML = meanValue;
}

function medianCalculator(valueRange){
    let medianValue = 0;
    
    valueRange.sort((a, b) => a - b);
    const middleIndex = Math.floor(valueRange.length / 2);

    if (valueRange.length % 2 === 0) {
        medianValue = (valueRange[middleIndex - 1] + valueRange[middleIndex]) / 2;
    } else {
        medianValue = valueRange[middleIndex];
    }

    document.getElementById("medianValue").innerHTML = medianValue;
}

 function modeCalculator(valueRange){

    let frequency = {};
    let modeValue = 0;

    // Iterate through the array to count the occurrences of each number
    valueRange.forEach(num => {
        frequency[num] = (frequency[num] || 0) + 1;
    });

    let maxFrequency = 0;

    // Iterate through the frequency object to find the number with the highest frequency
    for (let num in frequency) {
        if (frequency[num] > maxFrequency) {
            maxFrequency = frequency[num];
            modeValue = num;
        }
    }

    document.getElementById("modeValue").innerHTML = modeValue;
        
}

function varianceCalculator(valueRange){
    let varianceValue = 0;
    
    // Calculate the mean (average) of the values in the array
    const mean = valueRange.reduce((acc, val) => acc + val, 0) / valueRange.length;

    // Calculate the sum of squared differences from the mean
    const sumOfSquaredDifferences = valueRange.reduce((acc, val) => acc + Math.pow(val - mean, 2), 0);

    // Calculate the variance
    varianceValue = sumOfSquaredDifferences / valueRange.length;

    document.getElementById("varianceValue").innerHTML = varianceValue;
}

function meanDevCalculator(valueRange){
    let meandevValue = 0;
    
    // Calculate the mean (average) of the values in the array
    const mean = valueRange.reduce((acc, val) => acc + val, 0) / valueRange.length;

    // Calculate the sum of absolute differences from the mean
    const sumOfAbsoluteDifferences = valueRange.reduce((acc, val) => acc + Math.abs(val - mean), 0);

    // Calculate the mean deviation
    meandevValue = sumOfAbsoluteDifferences / valueRange.length;

    document.getElementById("meandevValue").innerHTML = meandevValue;
}

function stanDevCalculator(valueRange){
    let standevValue = 0;
    
    const n = valueRange.length
    const mean = valueRange.reduce((a, b) => a + b) / n
    standevValue = Math.sqrt(valueRange.map(x => Math.pow(x - mean, 2)).reduce((a, b) => a + b) / n)

    document.getElementById("standevValue").innerHTML = standevValue;
}

function zscoreCalculator(valueRange, sampleData){
    let zscoreValue = 0;
    
    // Calculate the mean (average) of the values in the array
    const mean = valueRange.reduce((acc, val) => acc + val, 0) / valueRange.length;

    // Calculate the standard deviation of the values in the array
    const variance = valueRange.reduce((acc, val) => acc + Math.pow(val - mean, 2), 0) / valueRange.length;
    const stdDeviation = Math.sqrt(variance);

    // Calculate the z-score
    zscoreValue = (sampleData - mean) / stdDeviation;

    document.getElementById("zscoreValue").innerHTML = zscoreValue;

}