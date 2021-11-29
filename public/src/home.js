function getTotalBooksCount(books) {
  let counter = 0;
  for(let i=0; i<books.length; i++){
    counter++
  }
  return counter;
}

function getTotalAccountsCount(accounts) {
  let counter = 0;
  for(let i=0; i<accounts.length; i++){
    counter++
  }
  return counter;
}

function getBooksBorrowedCount(books) {
  let counter = 0;
  let total = [];
  let result = [];
  books.forEach(book => {
    let { borrows } = book
    let condition = borrows.find(borrow => borrow.returned === false) 
      ? total.push(book) 
      : result.push(book)
}) 
return total.length;
}
function getMostCommonGenres(books) {
  // reduces array to an object
  // check if the object contains a key
  // if not, then increment the counter
  // else, create a key with a nested object with the desired keys and values
  let popularGenres = books.reduce((acc, book) => {
    if (acc[book.genre] != null) {
      acc[book.genre].count++
    } else {
      acc[book.genre] = { name: book.genre, count: 1 }
    }
    return acc
  }, {})
  
  // get the values
  let values = Object.values(popularGenres)
  // sort them from most common to least
  return values.sort((a,b) => b.count - a.count).slice(0,5)
  }


function getMostPopularBooks(books) {
  let popularBooks= books.reduce((acc, book) => {
      acc[book.title] = {name: book.title, count: book.borrows.length }
    return acc;
 }, {})

 let values = Object.values(popularBooks);
 return values.sort((a, b) => b.count - a.count).slice(0,5);
}

function getMostPopularAuthors(books, authors) {
  let popularAuthors = authors.reduce((acc, author) => {
    const{ name: {first, last}, id} = author;
    acc[id] = {name: `${first} ${last}`, count: 0}
    books.forEach(book => {
      if(book.authorId === id) acc[id].count += book.borrows.length;
    })
    return acc;
    }, {});
    let values = Object.values(popularAuthors)
    return values.sort((a, b) => b.count - a.count).slice(0, 5);
  }
  


module.exports = {
  getTotalBooksCount,
  getTotalAccountsCount,
  getBooksBorrowedCount,
  getMostCommonGenres,
  getMostPopularBooks,
  getMostPopularAuthors,
};
