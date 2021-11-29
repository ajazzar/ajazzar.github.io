function findAccountById(accounts, id) {
     
    let found = accounts.find((library) => library.id === id);
      return found;
    
  }
function sortAccountsByLastName(accounts) {
  
  let sorted = accounts.sort((accountA, accountB) =>

  accountA.name.last > accountB.name.last ? 1 : -1
  );
  
  return sorted;

}

function getTotalNumberOfBorrows(account, books) {
   // set a counter for the total number of time a book has been borrowed
  let counter = 0;
  let total = [];

  let people1 =[];
  let people2 = [];
  let report1 = [];
  let report2 = [];
  
  for(let person in books){
    people1 = books[person]

    people2 = people1.borrows;


    
    for(let individual in people2){
      report1 = people2[individual];
      report2 = report1.id
      total.push(report2)
       
    }
  }
  
  
   for (let i = 0; i<total.length; i++){
  
  if (account.id === total[i]){
    counter++;
  }
 
}  return counter; 
}

function getBooksPossessedByAccount(account, books, authors) {
  const booksCheckedOut = []
   // object destructuring
  const { id } = account
  
  // checks each book to see if the borrow id matches the account and the book is not returned
  books.forEach(book => {
    const { borrows } = book
    if (borrows.find(borrow => borrow.id === id && borrow.returned === false)) 
      booksCheckedOut.push(book)})
  
  // using helper function getBooksCheckedOut
  getBooksCheckedOut(books, authors)
  return booksCheckedOut;
}

// helper function for getBooksPossessedByAccount
// finds the books that are checked out
function getBooksCheckedOut(books, authors) {
  books.forEach(book => {
    let author = authors.find((person) => person.id === book.authorId)
    book['author'] = author
  })
}

 



module.exports = {
  findAccountById,
  sortAccountsByLastName,
  getTotalNumberOfBorrows,
  getBooksPossessedByAccount,
};
