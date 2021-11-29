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
 
  // check each books to see if borrow.returned is false
  // if true then the book goes into return2 array
  // it goes to notReturn2 if false
 books.forEach(book => {
    const { borrows } = book
    let condition = borrows.find(borrow =>  borrow.returned === false)
      ? notReturn2.push(book) : return2.push(book)
        return condition;
      })
      // combining the 2 arrays
      value = [notReturn2, return2];
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
