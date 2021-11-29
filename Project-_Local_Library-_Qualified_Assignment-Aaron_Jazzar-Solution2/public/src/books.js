function findAuthorById(authors, id) {
  let found = authors.find((author) => author.id === id)
  return found;
}

function findBookById(books, id) {
  let found = books.find((book) => book.id === id)
  return found;
}

function partitionBooksByBorrowedStatus(books) {
  
  let value = [];
  let return2 = [];
  let notReturn2 = [];
 
  
 books.forEach(book => {
    const { borrows } = book
    if (borrows.find(borrow =>  borrow.returned === false)) 
      notReturn2.push(book)
    else if (borrows.find(borrow =>  borrow.returned === true)) 
      return2.push(book)
     value = [notReturn2, return2];
      })
     
      console.log(value);
      return value;
}


function getBorrowersForBook(book, accounts) {
  const { borrows } = book
  const listOfBorrowers = []
  
  // check each accounts and books
  // compares account id with borrow id
  // if true then the listOfBorrowers receives the person's details
  // adds the returned status to each person
  accounts.forEach(person => {
    let { id } = person
    borrows.forEach(borrow => {
      if (id === borrow.id) {
      listOfBorrowers.push(person)
      person["returned"] = borrow.returned
    }
    })
  })
  return listOfBorrowers.slice(0, 10)
}



module.exports = {
  findAuthorById,
  findBookById,
  partitionBooksByBorrowedStatus,
  getBorrowersForBook,
};
