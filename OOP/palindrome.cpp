#include <iostream>
using namespace std;
int main()
{
	int num1,temp,rem,rev=0;
	cout<<"Enter the number to check";
	cin>>num1;
	temp=num1;
	while(num1!=0)
	{
		rem=num1%10;
		rev=rev*10+rem;
		num1=num1/10;
	}
	if(temp==rev)
	{
		cout<<"The number is palindrome";
	}
	
	else
	{
		cout<<"The number is not palindrome";
	}
	return 0;
}
