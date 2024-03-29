var myArray = new Array();
var arrayLength;

function populate()
{
    arrayLength = parseInt(document.getElementById("txtLength").value);
    
    //Populate array with ordered numbers
    for (var c = 0; c < arrayLength; c++)
    {
        myArray [c] = c;
    }

    myArray = myArray.sort(() => Math.random() - 0.5)   //Shuffle array elements
    document.getElementById("txtUnsortedArray").value = myArray;   //Output
    document.getElementById("bttQuickSort").disabled = false;
}

function calculateQuickSort()
{
    myArray = quickSort(myArray);
    document.getElementById("txtSortedArray").value = myArray;
}

function quickSort(arr)
{
    alert(arr);
    //Case base
    if (arr.length <= 1)
    {
        alert("uno");
        return arr;
    }
   
    let tmp, pivot;
    let i = -1;
    pivot = arr[arr.length - 1];

    //Partitioning process
    for (let j = 0; j < arr.length; j ++)
    {
        if ((arr[j] <= pivot) && (j < arr.length))
        {
            //If the array begins with an element smaller than the pivot, increase "i" and do nothing (There should be a swap between the element and itself but the result is the same)
            if ((i == -1) && (j == 0))
                i ++;

            else
            {
                i ++;
                tmp = arr[j];
                arr[j] = arr[i];
                arr[i] = tmp;
            }
        }
    }

    let posPivot = arr[i];   //Position of the pivot

    //return arr;
    let arrayPrePivot = arr.slice(0, posPivot);   //Slice array from 0 to pivot position and save the result iside a new array
    let arrayPostPivot = arr.slice(posPivot + 1, arr.length);   //Slice array from piot position to array length and save the result iside a new array

    
    //alert(arrayPrePivot + "-" + pivot + "-" + arrayPostPivot);
    arrayPrePivot = quickSort(arrayPrePivot);
    arrayPostPivot = quickSort(arrayPostPivot);


    //return merge(arrayPrePivot, arrayPostPivot);
}

function merge (arrPrePivot, arrPostPivot)
{
    let arraySorted = new Array(arrPrePivot.length + arrPostPivot.length);   //Create array with the size of the sum of the leftArray and rightArray

    return arraySorted;
}